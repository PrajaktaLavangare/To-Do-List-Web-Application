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
   $username = $_POST['reg_uname'];
   $password = $_POST['reg_password'];
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
    }else if ($action == 'registrar')
     {
        $name = filter_input(INPUT_POST, 'reg_uname');
        if(isset($name))
	{
	$pass = filter_input(INPUT_POST, 'reg_password');
	$exit = createUser($name,$pass);
	if($exit == true)
	{
	include('user_exit.php');
	}else {
	header("Location: login.php");
	}
	}
	}else if ($action == 'add')
	{
    
    
    }
    ?>
  
