// name of action with two obejects
export const register = ({ dispatch }, { payload }) => {
	return axios.post('/api/register', payload).then((response) => {
		console.log(response)
	})
}