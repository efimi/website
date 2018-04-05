<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\{RegisterFormRequest, LoginFormRequest};
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\{JWTException};
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
	protected $auth;

	public function __construct(JWTAuth $auth)
	{
		$this->auth = $auth;
	}

	public function login(LoginFormRequest $request)
	{
			try{
								
				if(!$token =  $this->auth->attempt($request->only('email','password'))) {
					return response()->json([

						'errors' => [
							'root' => 'Could you not sign in with all these details.'
						]
					], 401);
				}

			}
			catch (JWTException $e){
				return response()->json([

						'errors' => [
							'root' => 'Failed.'
						]
					], $e->getStatusCode());

			}
			// request contains aldready the user

			return response()->json([ 
				'data' => $request->user(), 
				'meta' => [
					'token' => $token
				]
			], 200);

	}

	public function register(RegisterFormRequest $request)
	{
		// validate moved to FormRequest 
		// $this->validate($request, [
		// 	'name' => 'required|max:255',
		// 	'email' => 'required|email|max:255|unique:users',
		// 	'password' => 'required|min:6'
		// ]);

		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
		]);

		// attempt login
		$token = $this->auth->attempt($request->only('email','password')); 

		// response  with jwt 
		// and response  with user data
		return response()->json([ 
			'data' => $user, 
			'meta' => [
				'token' => $token
			]
		], 200);



	}

	public function logout()
	{
		$this->auth->invalidate($this->auth->getToken());

		return response(null, 200);
	}

	public function user(Request $request)
	{
		return response()->json([
			'data' => $request->user(),
		]);
	}
}
