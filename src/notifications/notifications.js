import { showSuccessToast } from './success.js'
import { showErrorToast } from './error.js'
import { showBasketToast} from './basket.js'

export const notifications = {
	success() {
		showSuccessToast();
	},
	error() {
		showErrorToast();
	},
	basket() {
		showBasketToast();
	}
}