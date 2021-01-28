<?php
$server = $_SERVER;
if($server['REQUEST_METHOD'] === 'POST') {
	$post = $_POST;
	echo $post['text'];
}
?>