<?php 
	$iden=$_POST["iden"];
	$nom=$_POST["nom"];
	$dir=$_POST["dir"];
	$tel=$_POST["tel"];
	$corr=$_POST["corr"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("registro",$db);
	mysql_query("insert into registroentrada values('$iden','$nom','$dir','$tel','$corr')");
?>