<?php
/*
Plugin Name: contact-Alfasoft
Descritpion: This is just plugin in test.
Author: Débora Souza
Author URI:

*/

define('Contact-Alfasoft',__FILE__);

final class Plugin
{
               
	public function activate()
	{
		flush_rewrite_rules();
	}
	public function deactivate()
	{
		flush_rewrite_rules();
	}
}

	if(class_exists('Plugin')){
		define('Contact_Alfasoft');
                
		$plugin = new Plugin();
      }
      
	//Ativação
register_activation_hook(Contact_Alfasoft, array($plugin,'activate'));
//Desativação
register_deactivation_hook(Contact_Alfasoft, array($plugin,'deactivate'));

   




