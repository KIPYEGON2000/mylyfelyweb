<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');}

?>


<!DOCTYPE html>



<center><h style="background:blue;color:white;padding-top:60px;font-size:40px">WELCOME <?php echo $_SESSION['username'];?> to  KIPYEGON AMOS WEBSITE</h></center>
</br>
<h1>welcome <?php echo strtoupper($_SESSION['username']);?> you have log in  <a style="float:right" href ="logout.php">logout</a></h1
<h1> </h1>

<style>
*moses
{margin:0px;padding:0px} 
body{background:skyblue} 
#header{width:100%;height:80px; background:green;box-shadow:2px 4px 6px:green;}
#navbar{width:1000px;height:80px;float:right;}
#navbar>li{width:200px;list-style:none;float:left;border-right:1px solid gray;border-left:1px solid gray}
li>a{display:block;color:white;line-height:80px;
text-align:center;font-family:cursive;font-size:20px;text-decoration:none}
li>a:hover,
li>a:focus{background:black;color:red;}
#logo{width:250px;height:80px;float:left;padding-left:60px}
@media screen and (max-width:1060px){
#navbar{width:800px;height:80px}
#navbar>li{width:250px}
#logo>img{width:150px;height:80px}
@media screen and (max-width:1060px)

}
</style>
<html>
<head>
<title>Responsive navigation bar</title>

<link rel="style sheet"type="moses">
<meta name ="viewpoint"content="width=device-width initial scale=1">
</head>
<body>
<div id="header">
<div id="logo">
<img src="BRON.JPG"/>
</div>
<ul id="navbar">
<li><a href ="file:///E:/Documents/exelent.html">HOME</a></li>
<li><a href ="home.php">SERVICES</a></li>
<li><a href ="http://localhost/amostoo/">ABOUT AM.S</a></li>

<li><a href ="http://localhost/phpmyadmin/tbl_change.php?db=gis&table=orders">DATA BASE</a></li>


</ul>
<div class="main content">
<div class="content">
</content>
<article class="top content">
<header>
<h2><a href="file:///E:/Documents/KIPYEGON%20AMOS%20TOO.htm">first post</a></h2><br>
</header>
<footer>
<p>this is written by Amos<p>
</footer>
<content>
<p style="font-size:30px">Stakeholder Analysis

 
After you’ve engaged in the process of problem analysis and thereby identified the overriding problem and its constraints, causes, and effects, you need to consider whom the problem most affects and the roles and interests of different stakeholders in addressing the problem and reaching solutions.

<center> <p style="font-size:30px;"><a href="file:///E:/Documents/Stakeholder%20Analysis.html"style="background:yellow;color:red">read more</a></p></center>
 <footer>
<p>this is written by Amos<p>
<p>copy right amos</p>
<p>@mos.gmail.com</p>
<script language="JavaScript"> 
<!-- 
function popup() {  
document.write("Hello World") }
 //-->
 </script> 
 <input type="submit" onclick="popup()"value="Add"> </form> </body>
</footer>
 </content>
</article>
</div>
</body>
</html>