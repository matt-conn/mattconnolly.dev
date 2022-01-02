<?php


if($_POST["message"]) {


mail("mattconnollydev@fastmail.com", "Contact form submission",


$_POST["insert your message here"]. "From: mconnolly@fastmail.com");


}


?>