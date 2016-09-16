<?php
session_start(); 
require_once("core.php");
// echo "in functions.php";

function firstlast(){
		
		$con=connect();

		$sql_query="SELECT * FROM register WHERE fb_id = '".$_SESSION["fb_id"]."'";
		$r=mysql_query($sql_query);
		$row=mysql_fetch_array($r);
		$q=$row["level"];
		$sql_query="SELECT * FROM answers WHERE ansid = '".$q."'";
		$r=mysql_query($sql_query);
		$row=mysql_fetch_array($r);
		$returna = $row["firstlast"];

		$sql_query="UPDATE register SET  firstlast = '".$q."' WHERE `fb_id` = '".$_SESSION["fb_id"]."'";
		$result  = mysql_query($sql_query);
		return $returna;

}

function anslen(){
		
		$con=connect();

		$sql_query="SELECT * FROM register WHERE fb_id = '".$_SESSION["fb_id"]."'";
		$r=mysql_query($sql_query);
		$row=mysql_fetch_array($r);
		$q=$row["level"];
		$sql_query="SELECT * FROM answers WHERE ansid = '".$q."'";
		$r=mysql_query($sql_query);
		$row=mysql_fetch_array($r);
		$returna = $row["anslen"];

		$sql_query="UPDATE register SET  anslen = '".$q."' WHERE `fb_id` = '".$_SESSION["fb_id"]."'";
		$result  = mysql_query($sql_query);
		return $returna;

}

function levelskip(){
		
		$con=connect();

		$sql_query="SELECT * FROM register WHERE fb_id = '".$_SESSION["fb_id"]."'";
		$r=mysql_query($sql_query);
		$row=mysql_fetch_array($r);
		$q=$row["level"];
		$w=$q+1;
		$sql_query="UPDATE `register` SET `level` = '".$w."' , `levelskip` = '".$q."' WHERE `fb_id` = '".$_SESSION["fb_id"]."'";
		$result  = mysql_query($sql_query);
		return $q;

}

function getLifeline($life){
 	$con=connect();
 	//$sql_query="SELECT * FROM questions WHERE qno='".$level."'";
	$sql_query=" SELECT * FROM register WHERE fb_id='".$_SESSION["fb_id"]."'";
	$r=mysql_query($sql_query);
	$row=mysql_fetch_array($r);
	
	return $row[$life];
 
}

function getQuestionData($level){

	$con=connect();

//$username=cleandata($username);

	$sql_query="SELECT * FROM questions WHERE qno='".$level."'";

//echo $sql_query;

$r=mysql_query($sql_query);

	return $r;

// while($row=mysql_fetch_array($r))

// {

// $level=$row['level'];

// }

// return $level;

}


function scheckaccesstoken(){

	$graph_url = "https://graph.facebook.com/me?fields=email&access_token=".$_SESSION['access_token'];
	// echo $graph_url;
	if(!(file_get_contents($graph_url))){
		session_destroy();

		header('Location: '."https://localhost/~shreyas/Cryptex/vide/examples/fb.php");

		}; 
	     // echo $user->picture->data->url;
		 // if($suser->error){
		 // 	hi;
		 // };
}

 

function connect()

       {

         // $con = mysql_connect("166.62.6.102 ","cryptexmod","CSImod2016");

       		$con = mysql_connect("localhost",DBUSER,DBPASSWORD);


         if (!$con)

         {

          echo "Error: Could not connect to database. Please try again later.";
          echo mysql_error($con);

          exit;

         } 
          
         mysql_select_db("cryptex16",$con);
         

         return $con;

       }


function phonenumber($phone)

{

if (!preg_match("/^[0-9]{8,10}/i", $phone))

				{

					 return false;

				}

				return true;



}

	function get_all_user()

	{

		$con=connect();

		$sql_query="SELECT username FROM register";

		$r=mysql_query($sql_query);

		echo "<select name='user'> "; 

		while($row=mysql_fetch_array($r))

		{

			echo "<option value='".$row[0]."'>".$row[0]."</option>";

		}

		echo "</select>";

	}


function tries($level)
{
$con=connect();

if(isset($_SESSION['username']))
$username = $_SESSION['username'];
else{

$username = cleandata(extract_username());
$_SESSION['username'] = $username;

}

$query2 = "select username from register where fb_id = '".$username."'";
$result2 =mysql_query($query2);
if($row2 = mysql_fetch_array($result2))
	$username = $row2['username'];
	
	$sql_query="SELECT count(*) FROM  activity_log WHERE username='".$username."' and status = 0 and levelplayed = '".$level."'";

	$r=mysql_query($sql_query);

while($row=mysql_fetch_array($r))

{
return $row[0];

}



}


function delete_user($username)

{

	$con=connect();

	$sql_query="SELECT * FROM register where username='".$username."'";

	$r=mysql_query($sql_query);

	if(mysql_num_rows($r)==1)

	{

		$sql_query1="DELETE FROM register where username='".$username."'";

		$sql_query1="DELETE FROM admin where username='".$username."'";

		mysql_query($sql_query1);

		echo "<p>".$username." deleted</p>";

	}

	else

		echo "<p> Username does not exist.</p>";	

}



function insertlog($answer ,$level ,$status)

{


if(isset($_SESSION['username']))
$username = $_SESSION['username'];
else{

$username= cleandata(extract_username());
$_SESSION['username'] = $username;

}
$query2 = "select username from register where fb_id = '".$username."'";
$result2 =mysql_query($query2);
if($row2 = mysql_fetch_array($result2))
	$username = $row2['username'];

$con=connect();
$answer=md5($answer);

$sql_query="INSERT INTO activity_log (sno, username, levelplayed, answer, status, timestamp) VALUES (NULL, '$username', '$level', '$answer', '$status', CURRENT_TIMESTAMP)";

//echo $sql_query;



$r=mysql_query($sql_query);

}



function checkvalidemail($email)

{

if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))

				{

					 return false;

				}

				return true;

}

function checkpassword($pas1,$pas2)

{

if(strlen($pas1)>=6  && $pas1==$pas2)

					{

				//echo "$pas1 and $pas2";

						 return true;

					} 

				//echo " false $pas1 and $pas2";

					return false;

		}

		

function extract_email(){


 // print_r($_SESSION); 
$graph_url = "https://graph.facebook.com/me?fields=email&access_token=".$_SESSION['access_token'];

       // echo $graph_url;
		$user = json_decode(file_get_contents($graph_url));
		// if(empty($user)) echo "empty";
		// else echo "not empty";
		// echo $user->email ; 
		return $user->email;

}


function updateUser($id){
	$con=connect();


$sql_query="select level from register where fb_id='".$id."';";
$result  = mysql_query($sql_query);
 

$row=mysql_fetch_array($result);

$currentLevel=$row[0]+1;

$sql_query="UPDATE register SET level = '".$currentLevel."' , registertime = CURRENT_TIMESTAMP WHERE fb_id = '".$id."'";

mysql_query($sql_query);
		
}

function add_user(){
$con=connect();
 
 // echo "value of con is : $con ";
$graph_url = "https://graph.facebook.com/me?fields=email,id,name&access_token=".$_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));

$username = $user->name;
$email = $user->email;
$fb_id = $user->id;

// echo $graph_url;
		$_SESSION["email"] = $user->email;
		$_SESSION["name"] = $user->name;
		$_SESSION["fb_id"] = $user->id;
		$graph_url = "https://graph.facebook.com/me?fields=picture&access_token=" 
       .$_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));

		$_SESSION["pic"] = $user->picture->data->url;
		 $profilepic = $user->picture->data->url;
	     // echo $user->picture->data->url;
	

$sql_query="select fb_id from register where fb_id='".$fb_id."';";
$result  = mysql_query($sql_query);
 if(mysql_num_rows($result)==0)
{$sql_query="insert into register (username,fb_id,email,profilepic)
 values ('$username','$fb_id','$email','$profilepic')";
 $state = mysql_query($sql_query);
return  $state;

 } 

// else echo " entry already there";
else return 1;


}


function extract_id(){

$graph_url = "https://graph.facebook.com/me?access_token=" 
       . $_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));
		return $user->id;

}

function extract_name(){

$graph_url = "https://graph.facebook.com/me?access_token=" 
       . $_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));
		return ($user->first_name . ' '.$user->last_name);

}

function extract_username(){

if(isset($_SESSION['username']) && !empty($_SESSION['username']))
	return cleandata($_SESSION['username']);

$graph_url = "https://graph.facebook.com/me?access_token=" 
       . $_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));
		$_SESSION['username'] = cleandata($user->id);
		return cleandata($user->id);

}

function extract_profilepic(){

$graph_url = "https://graph.facebook.com/me?fields=picture&access_token=" 
       .$_SESSION['access_token'];
		$user = json_decode(file_get_contents($graph_url));
		 
	     // echo $user->picture->data->url;
		return  ($user->picture->data->url);

}

function extract_college(){

$graph_url = "https://graph.facebook.com/me?access_token=" 
       . $_SESSION['access_token'];
	   $college="";
	   $education="";
		$user = json_decode(file_get_contents($graph_url));
		foreach($user->education as $education){
		
			if($education->type == "College")
				break;
		
		}
return $education->school->name;

}

function useravailable($name)

{

//make this function

$con=connect();

$username=$name;

$username=cleandata($username);

	$sql_query="SELECT sno,username FROM register WHERE username='".$username."'";

//echo $sql_query;

	//$password=Secure::encrypt_value($password,$username);

$r=mysql_query($sql_query);

$i=0;

while($row=mysql_fetch_array($r))

{

$i++;

}

if($i!=0 || $username=="")

{

	return false;

}

	else

	return true;



}		

		

		function notempty($field)

		{

		

		if(strlen($field)==0)

		return true;

		return false;

		}

function redirect($location =NULL)

 {

		if ($location != NULL) {

			header("Location: {$location}");

			exit;

		}

	}

function logged_in() {
		
		//return isset($_SESSION['username']);
		$con=connect();
		
		$userid=extract_username();
		$sql_query="SELECT fb_id FROM register where fb_id = '$userid'";

		$r=mysql_query($sql_query);
		
				
		if(mysql_num_rows($r)==1) {
		

			return true;

		}
		else{
		
			return false;
		
		}
		
		
		
		

	}

	

function confirm_logged_in() {

		if (!logged_in()) {

			redirect("NewLOGIN.php");

		}

	}	 

function cleandata($field)

{



$f=trim($field);

$f=stripslashes($f);

$f=mysql_real_escape_string($f);

return $f;

}



function getlevel($fb_id)

{



$con=connect();

//$username=cleandata($username);

	$sql_query="SELECT level FROM register WHERE fb_id='".$fb_id."'";

//echo $sql_query;

$r=mysql_query($sql_query);

$level=0;

while($row=mysql_fetch_array($r))

{

$level=$row['level'];

}

return $level;



}



function setlevel($username,$level)

{

$con=connect();

$username=cleandata($username);

$level=cleandata($level);



$sql_query="update register set level =".$level." WHERE username='".$username."'";

//echo $sql_query;

mysql_query($sql_query);



}



function checkans($ans,$level)

{

$con=connect();

$ans=strtolower($ans);

//$ans=md5($ans);

$level=cleandata($level);

$sql_query=" select ansid from answers where ansid='".$level."' and ans='".$ans."'";

//echo $sql_query;


$r=mysql_query($sql_query);


$num_rows = mysql_num_rows($r);


if($num_rows==1)
return true;

//echo " cleared and see explanation ";

else
return false;



}



function pagelevel()

{

$con=connect();




$username = extract_username();




$sql_query="select page from levelans , register where levelans.number=register.level and register.fb_id='".$username."'";



$r=mysql_query($sql_query);

$page="notfound.php";

if($row=mysql_fetch_array($r))

{

$page=$row['page'];

}

return $page;



}



function updatelevel($level,$username)

{

$con=connect();

$level=cleandata($level);

$sql_query="update register set level=(select gotolevel from levelans where number=$level) where username='".$username."'";

mysql_query($sql_query);

}



function gotolevelpageofpresentlevel($level)

{

$con=connect();

$level=cleandata($level);

$sql_query="select page from levelans where number=(select gotolevel from levelans where number=$level)";

$page="notfound.php";

$r=mysql_query($sql_query);

while($row=mysql_fetch_array($r))

{

$page=$row['page'];

}

return $page;



}

function getexplanationandupdate($level,$username)

{



$con=connect();
$username=cleandata($username);
$level=cleandata($level);

$sql_query="update register set level=(select gotolevel from levelans where number=$level) , registertime=CURRENT_TIMESTAMP where fb_id='".$username."' ";

//echo $sql_query;

mysql_query($sql_query);





}

function getexplanation($level)

{



$con=connect();

$level=cleandata($level);

$sql_query="select  explanation from levelans where number=$level";

$exp="";

$r=mysql_query($sql_query);

while($row=mysql_fetch_array($r))

{

$exp=$row['explanation'];

}

return $exp;



}





function levelatpage($page)

{

$con=connect();

$page=cleandata($page);

$sql_query="select number from levelans where page='$page'";



$r=mysql_query($sql_query);

while($row=mysql_fetch_array($r))

{

$exp=$row['number'];

}

return $exp;



}

function currentpage() {



 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

}

?>