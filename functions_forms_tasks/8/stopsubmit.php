<?php
include 'functions.php';

if(!empty($_POST))
{
    addComment($_POST['userName'], $_POST['comment']);
    header('Location: 8.php');
}