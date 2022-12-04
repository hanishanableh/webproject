<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
   <style type = "text/css">
         body  { font-family: sans-serif;
                 background-color: lightyellow; }
         table { background-color: lightblue;
                 border-collapse: collapse;
                 border: 1px solid gray; }
         td    { padding: 5px; }
         tr:nth-child(odd) {
                 background-color: white; }
      </style>
   </head>
   <body>
      <?php
         $servername = "localhost";
		 $username = "root";
		 $password = "";
		 $dbname = "shield";
		 $conn = new mysqli($servername, $username, $password, $dbname);
		 if ($conn->connect_error) {
		     die("Connection failed: " . $conn->connect_error);
		 }

		 $name = $_POST["name"]; 
		 $email = $_POST["email"]; 
		 $message = $_POST["massage"]; 



		 $sql = "INSERT INTO feedbacks( Username,Email,Message)
		 VALUES( \"" . $name . "\",\"" . $email . "\",\"" . $message ."\");" ;
		 
		 $result = $conn->query($sql);

$conn->close();
      ?>
 	<div  style="display: flex;flex-direction: column;
    justify-content: center;height: 600px;width: 100%; text-align: center;">
 	<div style="height: 180px; text-align:center;">
            <img src="shield.jpg" style="width:120px;height: 180px;margin-bottom: 0px;">
         </div>
   <p>
 		<?php 
 		if($result == 1){
 			echo "Thanks for your feedback!";
 		}
 		?>
 	</p> 

 	</div>    
   </body>
</html>
