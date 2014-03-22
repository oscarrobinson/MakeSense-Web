<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
if(!isUserLoggedIn()){
	require_once("loginnav.php");
}
echo "
<body>
<div class='navbar navbar-inverse navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='login.php'><img src='/img/smalllogo.png'></a>
        </div>
        <div class='navbar-collapse collapse'>
          <ul class='nav navbar-nav'>
            <li class='active'><a href='index.php'>Home</a></li>";
			if(isUserLoggedIn()){
				echo"
				<li><a href='graph.php'>Graphs</a></li>";
			}
			
			echo"
			<li><a href='blog.php'>Blog</a></li>
            <li><a href='about.php'>About</a></li>
            <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>More <b class='caret'></b></a>
            <ul class='dropdown-menu'>
			  
			<li><a href='http://uclteam10.azurewebsites.net/phpbb3'>Forum </a></li>
			<li><a href='http://uclteam10.azurewebsites.net/wiki/index.php?title=Main_Page'>Wiki </a></li>
			<li><a href='contact.php'>Contact</a></li>
			<li class='divider'></li>
				";
			  
			if(isUserLoggedIn()){
				echo"  
                <li><a href='user_settings.php'>User Settings</a></li>
				<li><a href='#'>Graph Settings</a></li>";
			}

			echo"
				
				
                
                <li class='dropdown-header'>Login Difficulties</li>
				<li><a href='forgot-password.php'>Forgot Password</a></li>";
				if ($emailActivation)
				{
					echo "<li><a href='resend-activation.php'>Resend Activation Email</a></li>";
				}
			echo"	
              </ul>
            </li>
          </ul>";
		  
		  if(!isUserLoggedIn()){
		  echo "
          
		  
	<form class='navbar-form navbar-right' action='register.php'>
            <button type='submit' class='btn btn-success'>Register</button>
        </form>
	<form class='navbar-form navbar-right' name='login' action='".$_SERVER['PHP_SELF']."' method='post'>
		<div class='form-group'>
			<input type='text' name='username' placeholder='Username' class='form-control'/>
		</div>
		
		<div class='form-group'>
			<input type='password' name='password' placeholder='Password' class='form-control'/>
		</div>	
			<label>&nbsp;</label>
			<input type='submit' value='Login' class='btn btn-success' />
	</form>
		";
		  }
		  
		  if(isUserLoggedIn()){
		  echo "
          <form class='navbar-form navbar-right' action='logout.php'>
            <button type='submit' class='btn btn-success'>Sign Out</button>
          </form>";
		  }
		  
		  echo"
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
</body>
</html>";


?>











