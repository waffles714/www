<?php
$con = mysqli_connect('localhost', 'root', '', 'bankaccounts');

//Variables
$cluserid = '';
$clfname = '';
$cllname = '';
$clemail = '';
$clcity = '';

/*
if($con) {
	print("Connection gud");
}else{
	print("ruh roh");
	hy6thytbg
}

*/

$query=mysqli_query($con, "select * from client");


while($row=mysqli_fetch_array($query) ) {
	
	echo $row['clientid']; 
	echo $row['cluserid'];
	echo $row['clfname'];
	echo $row['cllname'];
	echo $row['clemail'];
	echo $row['clcity'];
	echo '<br>';
}



if(isset($_POST['register'])){

$cluserid = $_POST['cluserid'];
$clfname = $_POST['clfname'];
$cllname = $_POST['cllname'];
$clemail = $_POST['clemail'];
$clcity = $_POST['clcity'];
	

mysqli_query($con, 


"INSERT INTO client (clientid, cluserid, clfname, cllname, clemail, clcity) 
VALUES ('', '$cluserid', '$clfname', '$cllname', '$clemail', '$clcity') "

//INSERT INTO `acctinfo` (`acctid`, `acctclid`, `acctbal`, `accttype`) VALUES ('', 'SELECT clientid from client where sysdate=now()', 
//'$acctbal', '$acctype')


);
}


?>



<html>
<head>
<title>this is the title</title>
</head>


<body>


<br>
<br>

<form action="" method="post">
<label>enteruserid:</label>
<input type="text" id="cluserid" name="cluserid"></input>
<br>
<br>
<label>enterfirstname:</label>
<input type="text" id="clfname" name="clfname"></input>
<br>
<br>
<label>enterlastname:</label>
<input type="text" id="cllname" name="cllname"></input>
<br>
<br>
<label>enteremail:</label>
<input type="text" id="clemail" name="clemail"></input>
<br>
<br>
<label>entercity:</label>
<input type="text" id="clcity" name="clcity"></input>
<br>
<br>
<label>enterinitalamount:</label>
<input type="text" id="acctbal" name="acctbal"></input>
<br>
<br>
<label>enteraccounttype:</label>
<select type="text" id="accttype" name="accttype">
<option>selectaccttype</option>
<option>checkingacct</option>
<option>savingsacct</option>
</select>
<br>
<br>



	<button type ="submit" id="register" name = "register" value="register">Submit</button>
</form>





</body>


</html>