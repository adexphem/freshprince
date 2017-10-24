
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


jQuery(function(){
    items = $('.item');
    items.each(function() {
        item = $(this);
        img = item.find("img");
        img.each(function() {
            thisImg = $(this);
            url = thisImg.attr('src');
            thisImg.parent().attr('style', 'background-image:url('+url+')');
            thisImg.remove();
        });
    });
});

jQuery(document).ready(function() {
  jQuery(".basic-back-to-top").addClass("hidden")

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() <= 10 ) {
      jQuery(".basic-back-to-top").addClass("hidden")
    } else {
      jQuery(".basic-back-to-top").removeClass("hidden")
    }
  });

  jQuery("body").on("click", ".basic-back-to-top", function() {
      return jQuery("html,body").animate({
        scrollTop: 0
      }, 1000);
  });

});