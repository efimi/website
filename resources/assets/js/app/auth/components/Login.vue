<template>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>

				<div class="panel-body">

					<div class="alert alert-danger">
						Could not sign in you with those details.
					</div>

					<form action="" class="form-horizontal" role="form" @submit.prevent="submit">
						
						<div class="form-group" :class="{'has-error': errors.email}">
							<label class="col-md-4 control-label">Email address</label>
							<div class="col-md-6">
								<input name="email" type="text" class="form-control"  v-model="email">
							</div>
							<span class="help-block" v-if="errors.email">{{ errors.email[0] }}</span>
						</div>

						<div class="form-group" :class="{'has-error': errors.password}">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input name="password" type="text" class="form-control"  v-model="password">
							</div>
							<span class="help-block" v-if="errors.password">{{ errors.password[0] }}</span>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button class="btn btn-primary">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import { mapActions } from 'vuex'

	export default {
		data() {
			return {
				email: null, 
				password: null,
				errors: []
			}
		},
		methods: {
			// they are namespaced
			...mapActions({
				login: 'auth/login'
			}),
			submit () {
				this.login({
					payload: {
						email: this.email, 
						password: this.password

					},
					context: this
				})
			}
		}
	}
</script>