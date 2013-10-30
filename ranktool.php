<?php ob_start();
ini_set('max_execution_time', 1000);
    /* Plugin Name: Ranktool
    Description: A plugin to Finding domain ranking For multiple domains , use [RANKING-TOOL] shortcode to display tool in a page.   
    Author: Santosh Mahato
    Author URI: http://www.sandeveloper.com/
    version: 1.0
    * 
    */


    // Add main menu, hook
    add_action('admin_menu','ranktool_menu');

    // Add menu page and subpages
    function ranktool_menu()
    {
      // Main menu page
       //add_menu_page("Ranktool","Ranktool",8,'rank','process_rule');
	}
	
	function process_rule(){
	echo "<p>&nbsp;</p>";
	echo "<p>&nbsp;</p>";	
	echo "<strong>Short Code :</strong> [RANKING-TOOL]";
	}
	
	function process(){
include(dirname(__FILE__)."/src/seostats.php"); 
include(dirname(__FILE__)."/html.php"); 
		?>
        

<?php

		}
		
	add_shortcode( 'RANKING-TOOL' , 'process' ); 
	
	?>