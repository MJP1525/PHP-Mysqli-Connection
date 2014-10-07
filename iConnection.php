<?php
 
 /**
  * iConnection.php  
  * @author Matthew Panek
  * This an interface for a more protected Object Oriented Mysqli connection
  * 
  */
	interface iConnection
	{
	
			//In order to use this interface correctly you have to change these values to whatever values you use for your mysql database
			const host = "localhost";
			const user = "root";
			const password = "root";
			const db = "mjp1525";
		public function open();
		
		public function destroy($mysqli);
	
 
	}
   ?>
