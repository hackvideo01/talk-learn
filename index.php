<?
ini_set('display_errors', 'Off');
include_once("header.php");


$id = htmlspecialchars($_REQUEST['id']);


if ($id==null) {
	include_once("index.html");
}else if ($id==1) {
	include_once("talk-learn.php");
}

include_once("footer.php");


?>