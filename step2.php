<?
ini_set('display_errors', 'Off');
 error_reporting(0);
session_start();

if(time() - $_SESSION['time'] < 15 || !isset($_SESSION['time']))
{
	echo "you did not complete the linkvertise";
	echo "<meta http-equiv='Refresh' Content='4;url=https://keyauth.com/snowwy/'>"; 
	return;
}

$_SESSION['timetwo'] = time();

header("Refresh: 5; URL=https://link-to.net/165411/FnAimbot");  
print("Powered by KeyAuth.com login system");
?>

<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">


<title>KeySystem</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="MainDesign.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<div class="keysyscontainer">
    <div class="box">
        <span class="title">KeySystem | Step 2</span>
        <span class="text"> You have completed one linkvertise, two more to go! Redirecting in 5 seconds... </span>
        <span class="text"> No one likes advertisments, but going through this supports the creators of KeySystem. </span>
</html>
