// form '../componentens/index.js'
import {Login, Register } from '../components'


export default [
	{
		path: '/login',
		compontent: Login,
		name: 'login',
		meta: {
			guest: true,
			needsAuth: false
		}
	},
	{
		path: '/register',
		compontent: Register,
		name: 'register',
		meta: {
			guest: true,
			needsAuth: false
		}
	}
]