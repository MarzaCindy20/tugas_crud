<?php
if(!isset($_SESSION['username'])){
    header("location: login.php");
} else {
    header("location: home.php");
}