<?php

function conn()
{
  return require_once __DIR__ .'/pdo.php';
}

function debug($value,...$values)
{
  echo "<pre>";
  var_dump($value,...$values);
  exit;
}