<?php
session_start();

?>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="cheka.css"/>
</head>
<header>

</header>
<h2> <a style="float:right" href ="logout.php">logout</a></h2>
<body>
<h1>welcome <?php echo $_SESSION['username'];?></h1>




</body>
</html>