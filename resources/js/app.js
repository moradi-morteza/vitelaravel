console.log('app.js load start'); // Check if app.js is even loading

// Axios ------------------------------------------------------
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
console.log('Axios configured'); // Check if this part executes
// ------------------------------------------------------------

// Persian Date -----------------------------------------------------
import persianDate from 'persian-date';
// not work if you use : import 'persian-date'; -----------------
if (persianDate) {
    console.log('app.js : PersianDate imported successfully!');
    console.log('app.js : PersianDate sample output:', new persianDate().format('YYYY/MM/DD'));
} else {
    console.log('app.js : Failed to import PersianDate');
}
// ------------------------------------------------------------


// https://devdojo.com/thinkverse/how-to-use-jquery-with-laravel-and-vite
import $ from "jquery";
window.$ = $;


import 'cleave.js'

console.log('app.js load finished')


// if one part have problem whole app.js down
