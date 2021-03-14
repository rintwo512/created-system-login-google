<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DC - Home</title>
	<style>
		.container{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .box{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        width:500px;
        border-radius: 10px;
        /*padding:10px;*/
    }
    .home_title{
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        padding-bottom: 1px;
    }
    .home_title h1{
        font-family: sans-serif;
        font-size:20px;
        text-align:center;        
    }
    .one{
        color:#4081EC;
    }
    .two{
        color:#EA4335;
    }
    .three{
        color:#FBBC05;
    }
    .four{
        color:#34A853;
    }
    .five{
        color:#34A853;
    }
    .six{
        color:#EA4335;
    }
    .seven{
        color:#4081EC;
    }
    .user_img{
        display: flex;
        justify-content: center;
        margin-top:20px;
    }
    .user_img img{
        border-radius: 50%;         
    }
    .user_name h1{
        text-align: center;
        font-family: sans-serif;
        color:#555;
    }
    .btn{
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .btn .href{
        text-decoration: none;
        font-family: "Courier New";
        font-size: 20px;
        border:1px solid cyan;
        padding:10px 20px;
        color:cyan;
        border-radius: 5px;
        transition: all 0.5s;
    }
    .btn .href:hover{
        background-color: cyan;
        color:#fff;
    }
	</style>
</head>
<body>

	<div class="container">		
	  <div class="box">
		<div class="home_title">
			<h1>
				<span class="one">W</span>
				<span class="two">e</span>
				<span class="three">l</span>
				<span class="four">c</span>
				<span class="five">o</span>
				<span class="six">m</span>
				<span class="seven">e</span>
			</h1>
		</div>		
		<div class="user_img">
			<img src="<?=$user['profile_picture'];?>" alt="">
		</div>
		<div class="user_name">
			<h1><?=$user['first_name']." ".$user['last_name'];?></h1>
		</div>
		<div class="btn">
		  <a href="<?=base_url('auth/logout');?>" class="href">Logout</a>
		 </div>
	  </div>
	</div>
	
</body>
</html>