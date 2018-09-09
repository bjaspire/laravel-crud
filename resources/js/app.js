
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('perfect-scrollbar');


// gulp.task('buildBaseVendorScripts', function() {
//     return gulp.src([
//         './node_modules/jquery/dist/jquery.min.js', 
//         './node_modules/popper.js/dist/umd/popper.min.js', 
//         './node_modules/bootstrap/dist/js/bootstrap.min.js', 
//         './node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'
//     ])
//       .pipe(concat('vendor.bundle.base.js'))
//       .pipe(gulp.dest('./vendors/js'));
// });


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
