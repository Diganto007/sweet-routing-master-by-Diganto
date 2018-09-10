<?php 
//session_start();

//echo $_SESSION['id'];

if(isset($_REQUEST['id'])) {
	
	$id = $_REQUEST['id'];
    echo $id;
	
}else{
    
    $id = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hellow Bangladesh</h1>
    
    
    <a href="<?php base(); ?>about">About</a>
    <a href="<?php base(); ?>profile">Profile</a>
    <!--<img src="<?php //base(); ?>123.JPG" alt="">-->
    
    <p> <h3>Bangladesh is a beautiful country.</h3></p>
    <a href="article?id=1" class="btn btn-primary">Readmore</a>
    
    
    <a href="article?id=2" class="btn btn-primary">Readmore</a>
    
    
    <a href="article?id=3" class="btn btn-primary">Readmore</a>
</body>
</html>
<h1>Change by Diganto</h1>