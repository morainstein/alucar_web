<?php
session_start(); 

if(!isset($_SESSION['nome'])){
  header("Location: ../views/login.php");
  exit;
}