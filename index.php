<?php
require('database_connection.php');
require('db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
  $action = "show_login_page";
  }
  if($action == "show_login_page")
  {
  include('login.php');
  }else if($action == 'test_user')
  {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $suc = isUserValid($username,$password);
   if($suc == true)
    {
    //echo 'Welcome';    
    $result = getTodoItems($_COOKIE['my_id']);
    include('list.php');
    
    }else{
    //echo "Wrong User Name/Password!";
    
    header("Location: badInfo.php");
    }
    }else if ($action == 'register')
     { 
        $first_name = filter_input(INPUT_POST, 'first_name');
	$last_name = filter_input(INPUT_POST, 'last_name');
	$email = filter_input(INPUT_POST, 'email');
	$username = filter_input(INPUT_POST, 'username');
	$phone_number = filter_input(INPUT_POST, 'phone_number');
	$birthday = filter_input(INPUT_POST, 'birthday');
	$gender = filter_input(INPUT_POST, 'gender');
	if(isset($username)) {
	    $password = filter_input(INPUT_POST,'password');
	$exit = createUser($first_name,$last_name,$email,$username,$password,$phone_number,$birthday,$gender);
	if($exit == true)
	{
	include('user_exit.php');
	}else {
	header("Location: index.php");
	}
       }
     }
	else if ($action == 'add')
	{
    
    
    }
    ?>
  
