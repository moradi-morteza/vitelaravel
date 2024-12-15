console.log('app.js load start'); // Check if app.js is even loading

// Axios ------------------------------------------------------
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
console.log('Axios configured'); // Check if this part executes
// ------------------------------------------------------------

// persian date and persian date picker is not compatible with this system they just should import directly

// ------------------------------------------------------------
// https://devdojo.com/thinkverse/how-to-use-jquery-with-laravel-and-vite
// import $ from "jquery";
// window.$ = $;
// window.jQuery = $;
// -------- if you want to use date picker do not import jquery like this

import 'cleave.js'

console.log('app.js load finished')


// if one part have problem whole app.js down
