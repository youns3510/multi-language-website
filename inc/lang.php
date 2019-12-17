<?php

/* the main idea 

is to make links refering to the language with paramters 

1-check  the param 
2-make sessions for the languages
3-include the language files in index.php for example

to convert between languages 
we make two files e.g contains the static words in variables */
if(!isset($_SESSION)){
session_start();
}

if(isset($_GET['lang']) && $_GET['lang'] == 'en'){
  unset($_SESSION['lang']);
  $_SESSION['lang'] = 'en';
  header('location:index.php');
}

if(isset($_GET['lang']) && $_GET['lang'] == 'ar'){
  unset($_SESSION['lang']);
  $_SESSION['lang'] = 'ar';
  header('location:index.php');
}

if(isset($_SESSION['lang']) && $_SESSION['lang']=='en'){
  include_once('en.php');
  include_once('nav_en.php');
}
if(isset($_SESSION['lang']) && $_SESSION['lang']=='ar'){
  include_once('ar.php');
  include_once('nav_ar.php');
}

// for default languages
if(!isset($_GET['lang']) && !isset($_SESSION['lang'])){
  include_once('en.php');
  include_once('nav_en.php');
}