<?php
header('Content-Type:text/html;Charset=utf-8');
<<<<<<< HEAD
$arr = array(
	"user" => $_GET['loginuser'],
	"pass" => $_GET['loginpass'],
	"name" => 'response'
 
);
echo $_GET['jsoncallback'] . "(".json_encode($arr).")";
=======
// $arr = array(
// 	"user" => $_GET['loginuser'],
// 	"pass" => $_GET['loginpass'],
// 	"name" => 'response'
 
// );
// echo $_GET['jsoncallback'] . "(".json_encode($arr).")";
$url='https://m.9ji.com/web/api/floors/specialEnjoy/v1';
$html = file_get_contents($url);
echo $html;
$searchUrl = 'URL?content=';
if(!empty($_GET['content']))
{
    $searchUrl .= $_GET['content'];
}
echo file_get_contents($searchUrl);
>>>>>>> a25bb90ea7050322cd4019172e545e798bacf07a
?>