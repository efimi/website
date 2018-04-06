// takes from auth.routes.index all declared routes
import auth from './auth/routes'
import home from './home/routes'
import timeline from './timeline/routes'

// splites them into one array
export default [ ...home, ...auth, ...timeline]