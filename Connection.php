
 <?php
 
 /**
  * Connection.php  
  * @author Matthew Panek
  * This class is a implements the iConnection to allow a more secure connection via abstraction, kind of
  * 
  */
  
 include_once "iConnection.php"; 
  
	class Connection implements iConnection{
	
	
		/**
		  * @open()
		  * This method opens the database using my credentials
		  */
		function open(){
				
		$host = constant('iConnection::host');
		$user = constant('iConnection::user');
		$pass = constant('iConnection::password');
		$db = constant('iConnection::db');		
	
			//Connection being made
		$mysqli = new mysqli($host,$user,$pass,$db);
		
		//If mysqli connection error
		if ($mysqli->connect_error){
		
		//If will print a vague message
		$error = "Can't Connect, please call Tech Support";
		
		exit(); //Closing database on error
		
		//Returning error
		return $error;
		
		}
		
			//Else
		//Returning the mysqli object
		return $mysqli;
	}//End of open()
		
		
		/**
		  * @destory()
		  * @param $mysqli
		  * This function closes the connection for the database
		  */
		function destroy($mysqli){
		
		$mysqli->close();
		
		}
 
	}
   ?>
