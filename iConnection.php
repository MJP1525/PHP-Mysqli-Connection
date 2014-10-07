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
			const host = "insert-host-name-here";
			const user = "insert-user-name-here";
			const password = "insert-password-here";
			const db = "insert-db-name-here";
		
		//Functions that will be implemented
		public function open();
		
		public function destroy($mysqli);
	
 
	}
   ?>
