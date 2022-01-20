
<?php
/*
Plugin Name: contact-Alfasoft
Descritpion: This is just plugin in test.
Author: Débora Souza
Author URI:

*/

add_action('amdin_menu','custom_funtion1');

function custom_function1(){

add_menu_page(
  'custum plugin' ,
  'Custom Plugin',
  'manage_options',
  'custom_plugin_page',
  'custum_function02',
  plugins_url('plugins',__FILE__));
  

  ?>