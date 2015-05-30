<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | Search</title>
<meta name="author" content="hosam azzam" />
<!-- Date: 2014-11-16 -->
</head>

<body bgcolor="#ffffff" id="body">
<center>
  <div id="header" >
    <div class="logo" > <font face="fantasy" color="#BCC820" size="7">
      <center>
        Safrota.com
      </center>
      </font> </div>
    <div class="heder-content" align="left" > <font face="fantasy" color="#33817f" size="5" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; <a href="../../home.html">&nbsp;&nbsp;home </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <a href="checkout.php" >Checkout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="">&nbsp;&nbsp;&nbsp;&nbsp;Inbox </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="search.php">&nbsp;&nbsp;&nbsp;&nbsp;Search </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="order.php" >Order Tracking</a> &nbsp;&nbsp;&nbsp;
        <a href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;Profile </a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onClick=" window.close()" href="../../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> </font> </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div id="content" align="left"> <br>
    <!-- onchange="location = this.options[this.selectedIndex].value;"-->
    
    <form method="post" action="search.php">
      &nbsp;&nbsp;&nbsp; Name :
      <input type="text" name="searchtext"   style="background-color:#BCC820; border-color:#33817f; border:double; font-size:22px; color:#191A1A; width:350px; " />
      <select name="s_option"  style="background-color:#2AAFCB; border:dotted; font-size:22px; font-family:fantasy; color:#33817f; " >
         <option value="All">All</option>
        <optgroup label="Book">
        <option value="Art">Art</option>
        <option value="Sciences">Sciences</option>
        <option value="Educational">Educational</option>
        </optgroup>
        <optgroup label="Mobile" >
        <option value="Sony">Sony</option>
        <option value="Samsung">Samsung</option>
        <option value="HTC">HTC</option>
        </optgroup>
        <optgroup label="Labtop">
        <option value="Toshiba">Toshiba</option>
        <option value="Lenovo">Lenovo</option>
        <option value="HP">HP</option>
        </optgroup>
        <optgroup label="Camera">
        <option value="Canon">Canon</option>
        <option value="Nikon">Nikon</option>
        <option value="BenQ">BenQ</option>
        </optgroup>
      </select>
      <input type="submit" value="Search"  style="background-color:#7DB818; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; " />
    </form>
    <br>
    <br>
    <?php
		error_reporting(0);	
		
		 require_once("../../Controler.php");
		 $send="null";
		
	if( $_POST["s_option"] == "All" ){
	  $send ="SELECT * FROM `product` ";
	}	 
		 
	if( $_POST["s_option"] == "Art" ){
	   $send ="SELECT * FROM `product` WHERE Category='Book' and Type ='Art'  ";
	}
	if( $_POST["s_option"] == "Sciences" ){
	  $send ="SELECT * FROM `product` WHERE Category='Book' and Type ='Sciences'  ";
	}
	 if( $_POST["s_option"] == "Educational" ){
	 $send ="SELECT * FROM `product` WHERE Category='Book' and Type ='Educational'  ";	 
	}
	 if( $_POST["s_option"] == "Sony" ){
	   $send ="SELECT * FROM `product` WHERE Category='Mobile' and Manfactor ='Sony'  ";
	}
	if( $_POST["s_option"] == "Samsung" ){
	  $send ="SELECT * FROM `product` WHERE Category='Mobile' and Manfactor ='Samsung'  ";
	}
	 if( $_POST["s_option"] == "HTC" ){
	  $send ="SELECT * FROM `product` WHERE Category='Mobile' and Manfactor ='HTC'  ";
	}
	if( $_POST["s_option"] == "Toshiba" ){
	   $send ="SELECT * FROM `product` WHERE Category='Labtop' and Manfactor ='Toshiba'  ";
	}
	if( $_POST["s_option"] == "Lenovo" ){
	  $send ="SELECT * FROM `product` WHERE Category='Labtop' and Manfactor ='Lenovo'  ";
	}
	 if( $_POST["s_option"] == "HP" ){
		 $send ="SELECT * FROM `product` WHERE Category='Labtop' and Manfactor ='HP'  "; 
	}
	if( $_POST["s_option"] == "Canon" ){
	  $send ="SELECT * FROM `product` WHERE Category='Camera' and Type = 'Canon' ";
	}
	if( $_POST["s_option"] == "Nikon" ){
	  $send ="SELECT * FROM `product` WHERE Category='Camera' and Type = 'Nikon' ";
	}
	 if( $_POST["s_option"] == "BenQ" ){
	 $send ="SELECT * FROM `product` WHERE Category='Camera' and Type = 'BenQ' ";	 
	}
	 
	 $obj = new Controler;
	 $result = $obj->search($send);
	  if($result==false){
	  echo "no ads found.";
	  
	 
	 }
?>
  </div>
</center>
</body>
</html>
