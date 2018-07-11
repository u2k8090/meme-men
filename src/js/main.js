
import Vue from 'vue';
import $ from 'jquery';

/* eslint-disable no-console */
/* eslint-disable no-unused-vars */

const app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue ？?',
  },
});

$(() => {
  const test = $('p').text();
});
