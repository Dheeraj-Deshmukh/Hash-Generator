<!--
File Name     : hash_generator.php
Created by    : Dheeraj Deshmukh
last modified : 21 sept 2020
Php version   : 7.4.10
OS			  : Centos 7 

note :- download hck5.jpg and hashgen.jpg for proper interface ...available in this repository
-->

<!DOCTYPE html>
<html>
<head>
	<title>Hash Generator</title>
</head>
<body bgcolor="gray">
<div style="background-color:black; width:900px;height:120px;position:fixed;top:0";>
		<img src="hck5.jpg" style="width:100px;height:100px;position:fixed;top:0"; / >
		<p align="center" ><img src="hashgen.jpg"  style="width: 300px;height: 50px;position: fixed;top: 10;left: 300px"; /></p>

</div>

<div style="background-color:black; width:900px;height:300px;position:fixed;bottom: 190px;text-decoration:none;color:skyblue";>	
	<fieldset><form action="hash_generator.php" method="POST">
		
	
	<br /><b>Enter Your String Here : </b><input type="text" name="password" value="" style="width: 250px;"><br /><br />
	<b>Select Method of Hash : </b><select name="hashh" style="width: 270px;"><option>md4</option>
	<option>md5</option>
	<option>crc32b</option>
	<option>sha1</option>
	<option>tiger128,3</option>
	<option>haval192,3</option>
	<option>haval224,3</option>
	<option>tiger160,3</option>
	<option>haval160,3</option>
	<option>haval256,3</option>
	<option>tiger192,3</option>
	<option>haval128,3</option>
	<option>tiger192,4</option>
	<option>tiger128,4 </option>
	<option>tiger160,4</option>
	<option>haval160,4 </option>
	<option>haval192,4</option>
	<option>haval256,4</option>
	<option>adler32</option>
	<option>haval128,4 </option>
	<option>haval224,4</option>
	<option>ripemd256</option>
	<option>haval160,5</option>
	<option>haval128,5</option>
	<option>haval224,5</option>
	<option>haval192,5</option>
	<option>haval256,5</option>
	<option>sha256</option>
	<option>ripemd128</option>
	<option>ripemd160</option>
	<option>ripemd320</option>
	<option>sha384</option>
	<option>sha512</option>
	<option>gost</option>
	<option>whirlpool</option>
	<option>snefru</option>
	<option>md2</option></select><br/ ><br />

	




	<b>Select Formate of Hash : </b><select name="cast" style="width: 270px;">
	<option>Single</option>
	<option>Single and Append</option>
	<option>Single and Prepend</option>
	<option>Single and Append-Prepend</option>
	<option>Double</option>
	<option>Double and Append</option>
	<option>Double and Prepend</option>
	<option>Double and Append-Prepend</option>
	<option>Triple</option>
	<option>Triple and Append</option>
	<option>Triple and Prepend</option>
	<option>Triple and Append-Prepend</option></select>
	<br />
	<br />



	<input type="submit" name="Generate" value="Generate">
</form></fieldset>

</div>
<div  style="background-color:red; width:900px;height:60px;position:fixed;bottom: 200px;text-decoration:none;color:black";>


<?php 
	$salt = "sty45AaMq9jkzl#+#744@D";
	if ($_POST['Generate']) {
		if ($_POST['cast'] == "Single") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />" . "</b>";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],$_POST['password']) . "<br />";
		}
		if ($_POST['cast'] == "Double") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'] ,hash($_POST['hashh'],$_POST['password'])) . "<br />";
		}

		if ($_POST['cast'] == "Triple") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],hash($_POST['hashh'] ,hash($_POST['hashh'],$_POST['password']))). "<br />";
		}
		if ($_POST['cast'] == "Single and Append") {

			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " . $_POST['cast']." "."hash " . "is ==> " . hash($_POST['hashh'],$salt . $_POST['password']) . "<br />";
		}
		if ($_POST['cast'] == "Single and Prepend") {

			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],$_POST['password'] . $salt) . "<br />";
		}
		if ($_POST['cast'] == "Single and Append-Prepend") {

			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],$salt . $_POST['password'] . $salt) . "<br />";
		}
		if ($_POST['cast'] == "Double and Append") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'] ,$salt . hash($_POST['hashh'],$salt . $_POST['password'])) . "<br />";
		}
		if ($_POST['cast'] == "Double and Prepend") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'] ,hash($_POST['hashh'],$_POST['password'] . $salt) . $salt) . "<br />";
		}
		if ($_POST['cast'] == "Double and Append-Prepend") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'] ,$salt . hash($_POST['hashh'],$salt . $_POST['password'] . $salt) . $salt) . "<br />";
		}
		if ($_POST['cast'] == "Triple and Append") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],$salt . hash($_POST['hashh'] ,$salt . hash($_POST['hashh'],$salt . $_POST['password']))). "<br />";
		}
		if ($_POST['cast'] == "Triple and Prepend") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " .$_POST['cast']." ". "hash " . "is ==> " . hash($_POST['hashh'],hash($_POST['hashh'] ,hash($_POST['hashh'],$_POST['password'] . $salt) . $salt) . $salt). "<br />";
		}
		if ($_POST['cast'] == "Triple and Append-Prepend") {
			echo "<b>" . "Your String is : " . $_POST['password'] . "<br />";
			echo "<b>" . "Your" . " " . $_POST['hashh'] . " " . $_POST['cast']." "."hash " . "is ==> " . hash($_POST['hashh'],$salt . hash($_POST['hashh'] ,$salt . hash($_POST['hashh'],$salt . $_POST['password'] . $salt) . $salt) . $salt). "<br />";
		}

	}else{
		echo "";
	}

?>
</div>

</body>
</html>



















