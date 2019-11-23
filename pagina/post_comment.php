<?php

mysqli_connect("127.0.0.1","root","");
mysqli_select_db("comments");

$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length = strlen($comment);
if($comment_length>100){
	header("location: index.php?error=1");
}

else{
	mysqli_query("INSERT INTO comments VALUES('','$name','$comment')");
	header("location: index.php");
}

?>