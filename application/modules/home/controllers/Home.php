<?php
 class Home extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 	}

 	function index(){

 		// getting user list 
 		echo "I am from home module and home controller and index function ";
 	}


    function test(){

    	echo "helloooooooo";
    }



 }

?>