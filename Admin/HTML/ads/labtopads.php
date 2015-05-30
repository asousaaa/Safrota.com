<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/createads.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | Labtop </title>
<meta name="author" content="hosam azzam" />
<!-- Date: 2014-11-16 -->
</head>
 
<body bgcolor="#ffffff" id="body">

 <?php
 
  require_once('../Advertisement.php');
	  require_once('../labtop_class.php');
	   require_once('../../Controler.php');
	   
if(isset($_POST['submitbutton'])){
	if($_POST['adsname'] =="" || $_POST['Quantity'] =="" ||$_POST['Price'] =="" ||$_POST['CPU'] =="" ||$_POST['Hdd'] ==""  ||$_POST['Ram'] ==""  ||$_POST['manefactor'] =="" ){
echo '<script>window.alert("one or more field are requeried")</script>';
	}
	else {
		
		$adsobj= new Advertisement;
	$adsobj->ItemName = $_POST['adsname'];
	$adsobj->adscount =$_POST['Quantity'];
	$adsobj->category='Labtop';
	$adsobj->Description= $_POST['Description'];
	
	$labobj= new labtop;
	$labobj->cpu= $_POST['CPU'];
	$labobj->hdd = $_POST['Hdd'];
	$labobj->ram = $_POST['Ram'];
	$labobj->Price = $_POST['Price'];
	$labobj->manefactor =$_POST['manefactor'];
	
	$controlobj = new Controler;
	$controlobj->createAds($adsobj,null,$labobj,null,null,2);
	
	}
}

if(isset($_POST['cancelbutton'])){
echo 'window.open("../../home.html","_self")</script>';
}
?>
 
 
<center>
<div id="header" >
<div class="logo" >
<font face="fantasy" color="#BCC820" size="7">
<center> Goods.com</center>
</font>
</div>
<div class="heder-content" align="left" >
 <font face="fantasy" color="#33817f" size="5" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
           <a href="../../home.html">&nbsp;&nbsp;home </a> 				   
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
           <option value="">Create ads</option>
     <option value="labtopads.php">labtop</option>
    <option value="camads.php">camera</option>
    <option value="bookads.php">book</option>
     <option value="mobileads.php">mobile</option>
	</select>  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="spinning.php">&nbsp;&nbsp;&nbsp;&nbsp;Shipping</a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
           <a href="list.php" >View Products</a>
            &nbsp;&nbsp;&nbsp;
            <a href="accounts.php">&nbsp;&nbsp;&nbsp;&nbsp;Customer </a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a onClick=" window.close()" href="../../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> 
            </font>
</div>
</div>
<br><br><br><br><br><br>
<div id="content" align="left">
<form id="create" method="post" >
<font face="fantasy" color="#33817f" size="5" >
<center> Advertisement for Labtop </center>
<input id="image" type="image" name="adsimage" src="../../image/adsimage.png" > <br>
 
&nbsp;&nbsp;&nbsp;&nbsp; Titel : <br>
 
 
&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="adsname" style=" height:20px; width:400px; " > <br><br>
&nbsp;&nbsp;&nbsp;&nbsp; Quantity :<br>
&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Quantity" style=" height:20px; width:400px; " ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp; Description :<br> <input type="file" name="browser" id="browseimage" title="choose image">
&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="Description" rows="6" cols="100" style="max-width:700px; max-height:100px;"></textarea>
<br>
&nbsp;&nbsp;&nbsp;&nbsp; manefactor :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Price : <br>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="manefactor" style=" height:20px; width:200px; " >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<input type="text" name="Price" style=" height:20px; width:200px; " > <br>
&nbsp;&nbsp;&nbsp;&nbsp;CPU :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp; Ram : <br>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="CPU" style=" height:20px; width:200px; " >
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<input type="text" name="Ram" style=" height:20px; width:200px; " > <br>
&nbsp;&nbsp;&nbsp;&nbsp; Hdd : <br> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Hdd" style=" height:20px; width:200px; " >
</font>

<div align="center" id="submit-button" >


<input type="submit" name="submitbutton" value=&#10004 style="font-size:65px; color:#33817f; background-color:transparent; border:hidden; " />


</div>
<div align="center" id="cancel-button">

<input type="submit" name="cancelbutton" value=&#10006 style="font-size:65px; color:#33817f; background-color:transparent; border:hidden; " />

</div>
 
<br><br>
 
 </form>
</div>
 
 
 
 
</center>
 
 
</body>
</html>