// name of action with two obejects
export const register = ({ dispatch }, { payload, context }) => {
	return axios.post('/api/register', payload).then((response) => {
		console.log(response)
	}).catch((error) => {
		context.errors = error.response.data.errors
	})
}

export const login = ({ dispatch }, { payload, context }) => {
	return axios.post('/api/login', payload).then((response) => {
		//set token 
		// fetch user

	}).catch((error) => {
		context.errors = error.response.data.errors
	})
}

export default setToken = ({commit, dispatch}, token) => { 
	// invoke new methode ind mutations
	commit('setToken', token)
}