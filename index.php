
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MMAB Bank</title>
	<style>
			*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html{
    background-color: #fff;
    color: #000;
    font-family: 'Lato','Arial',sans-serif;
    font-size: 20px;
    font-weight: 300;
}

.row{
    max-width: 1140px;
    margin: 0 auto 0 auto;
}

header{
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(resource/realimg.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
    border-bottom: 20px solid yellow;
    
}
.msg{
    position: absolute;
    width: 1140px;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
    border: 3px solid #faf0f0;
    padding:60px 0px 60px 60px;
    border-bottom-style: groove;
        
}
h1 {
  margin: 0;
  margin-right: 10px;
    color: #fff;
    font-size: 200%;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 1px;
    word-spacing: 4px;
}
.bank-name{
	margin-top: 50px;
	margin-left: 40px; 
    height: 125px;
    width: auto;
    float: left;
}
.main-nav{
	float:right;
    list-style: none;
    margin-top: 60px;
}
.main-nav li{
    display: inline-block;
    margin-left:40px;
    margin-right: 40px;
  
}

.main-nav li a:link,
.main-nav li a:visited{
    color:#fff;
    text-decoration: none; 
    text-transform: uppercase;
    font-size:90%;
    border-bottom: 2px solid transparent;
    transition:border-bottom 0.2s;
    padding-bottom: 8px;
}
.main-nav li a:hover,
.main-nav li a:active{
    
    border-bottom:2px solid #f4f40b;

}
.btn:hover,.btn:active{
    background-color: #c7b23a;
;
}
.btn{
    align-content: 50%;
    position: absolute;
    top: 70%;
    left: 17%;
}
.btn:link,.btn:visited{
    display: inline-block;
    padding: 10px 40px;
    font-weight: 300;
    text-decoration: none;
    border-radius: 300px;
    transition: background-color 0.5s ,border 0.5s, color 0.10s;
}

.btn-link:link,.btn-link:visited{
    background-color: #c7b23a;
    color:#000;
    border: 1px solid  #c7b23a;
    margin-right: 20px;
    margin-left:25%;
    margin-top: 20px;
}

.btn-change:link,.btn-change:visited{
    border: 1px solid  #c7b23a;
    color:#c7b23a;
}
.btn-change{
	position: absolute;
	top: 120%;
	left: 40%;
}

.btn-link:hover,.btn-link:active{
    
    border: 1px solid  #7e702e;
    color:#fff;
    
}

.btn-change:hover,.btn-change:active{
    border: 1px solid  #b7a74a;
    color:#000;
}
	.discription{
		background-color: #c4c4c4;
	}
	.aboutus{
		color: #000;
		margin-top: 20px;
		margin-left: 40%;
	}
	h3{
		color: #000;
		margin-top: 20px;
		margin-left: 30px;
		margin-right: 30px;

	}

	</style>

</head>
<body>
	<header class="header">
		
			<div class="bank-name"><h1>MMAB BANK</h1></div>
			<nav class="main-nav">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="history.php">transfer history</a></li>
				<li><a href="customer.php">customer</a></li>
			</ul>
		</nav>
		<h1 class="msg">hello customer,<br>Transfer your money from our bank safely and happely</h1>
		<a href="customer.php" class="btn btn-link" >view all customer</a>
	</header>
	<section class="discription">
		<div class="abutus-div"><h1 class="aboutus">About Us</h1><hr>
			<i><h3>As a trusted customer, understaing your transfer of money goal and enables us to provide counsel and well-designed solutions for unique need</h3></i>
		</div>
        <div><center><a href="#" class="btn btn-change">contact us</a></center></div>
	</section>
<!--<a href="/LX/alm_assessment_players/launch_assessment?assessment_id=114181&amp;c_id=email-etiquette-batch-03" id="assessment_launch_link" onclick="click_event_id('assessment_launch_link',event,'https://learning.tcsionhub.in');return false;"><span style="position: relative; top: 3px;" class="pendinglable  btn-embossed  pull-right" title="Open assessment in new window">Launch Assessment</span></a>
-->

</body>
</html>