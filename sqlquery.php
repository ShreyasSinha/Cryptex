<?php

include('functions.php');
echo "hello";
$con = mysql_connect("127.0.0.1 ","root","root");
// $con = mysql_connect("localhost","cryptexmod","CSImod2016");


         if (!$con)

         {

          echo "Error: Could not connect to database. Please try again later.";
          

          exit;

         } 
          
         mysql_select_db("cryptex16",$con);

// $sql_query="insert into register (username,fb_id,email) values ('aryan', '13245' , 'aryan.raj000@outlook.com')";


// mysql_query($sql_query);


$sql_query="SELECT username FROM register";

		$r=mysql_query($sql_query);

		echo "<select name='user'> "; 

		while($row=mysql_fetch_array($r))

		{

			echo "<option value='".$row[0]."'>".$row[0]."</option>";

		}

		echo "</select>";


if(isset($_SESSION['accessToken']))
	{echo $_SESSION['accessToken'];
	$college = extract_college();
echo $college;
}
else echo "accessToken not set";
$college = extract_college();
echo $college;

?>