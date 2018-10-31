<?php
$con=mysqli_connect("localhost","root","","farmersfriend");


 function select_all($con)
 {      
        $query="SELECT * FROM `postad` order by id desc";

		$run=mysqli_query($con,$query);
		
		if(mysqli_num_rows($run) >0)
			{
			while($data=mysqli_fetch_assoc($run))
			{
			?>
		
			
		    <table align="center" style="width:80%;margin-top:20px;border-bottom:1px solid;border-left:1px solid;border-right:1px solid;">
				<tr align="left">
				  <td rowspan="4" style="height:190px; width:180px;border-right:1px solid;border-top:1px solid;"> <img src="upload/<?php echo $data['photo'] ?> " style="height:190px; width:180px;"></td>
				 </tr>
				 
				 <tr align="left" style="font-size:18px; padding-left:10px;">
				  <th bgcolor="#d9d9d9" style="vertical-align:0px; padding-top:9px;border-top:1px solid;"><a style="color: #4675d2" href="">&nbsp;<?php echo $data['title'] ?></a></th>
				  <td bgcolor="#d9d9d9" align="center" style="vertical-align:0px; padding-top:9px;border-top:1px solid;"><?php echo $data['price'] ?>/-Rs</td>
				 </tr>
				 
				 <tr align="left" style="font-size:14px;">
				  <th bgcolor="#e6e6e6" style="vertical-align:0px;">&nbsp;<?php echo $data['description'] ?></th>
				  <td bgcolor="#e6e6e6"></td>
				 </tr>
				 
				 <tr align="left">
				  <th bgcolor="#f2f2f2" style="vertical-align:0px;">&nbsp; Mobile Number:<?php echo $data['mobile'] ?></th>
				  <td bgcolor="#f2f2f2"></td>
				 </tr>
				</table>
				<?php
}
}
}
?>


	     
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Farmer's Friend | Online product trading system </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
	
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<br/>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" height="193px" alt="Bootsshop"/></a>
		
		<input id="srchFld" class="srchTxt" type="text" />
		
		<form method="post" name="load" action="index.php">
		
		<select name="category" id="category">
			<option>All</option>
			<option value="farmAnimals">Farm-Animals</option>
			<option value="agriInfo">Agri-Information</option>
			<option value="toolsMachinary">Tools-Machinary</option>
			<option value="seedsFertilizer">Seeds-Fertilizers</option>
			<option value="fruits">Fruits</option>
			<option value="vegetablesFlowers">Vegetables-Flowers</option>
			<option value="grainsPulses">Grains-Pulses</option>
			<option value="fishMeat">Fish-Meat</option>
			<option value="exportersTraders">Exporters-Traders</option>
			<option value="dairyProducts">Dairy-Products</option>
			<option></option>
		</select> 
		  <button type="submit" name="select_category" class="btn btn-primary">Go</button>
  
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 
	 <li><div id="google_translate_element"></div><script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
	
	<li class="">
	 <a href="login.php" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="themes/images/carousel/corosel.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="themes/images/carousel/corosel.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/corosel.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/corosel.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/corosel.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<!--<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>-->
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> FORM-ANIMALS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cow (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Ox(30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Dog(80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Buffalo (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> TOOLS-MACHINARY[840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Water Pumps(45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Trailer (8)</a></li>												
														
			</ul>
			</li>
			<li class="subMenu"><a>FRUITS [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Apples  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Banana(8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mango(5)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">SEEDS FERTILIZER [18]</a></li>
			<li><a href="products.html">GRAINS-PULSES [58]</a></li>
			<li><a href="products.html">VEGETABLES-FLOWERS [14]</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="themes/images/products/t.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Tracter</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/t.jpg" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Tracter</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/t.jpg" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Tracter</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Latest Products <small class="pull-right">200+ latest products</small></h4>
			
		</div>
		
		      <?php echo select_all($con); ?>
			  
			  <!--===select category================================-->
			  
			<?php  
			$con=mysqli_connect("localhost","root","","farmersfriend");
			if(isset($_POST['select_category']))
            {
			$select = $_POST['category'];
				$query="SELECT * FROM `postad` WHERE category='$select'";
				$run=mysqli_query($con,$query);
				if(mysqli_num_rows($run) >0)
			{
			while($data=mysqli_fetch_assoc($run))
			{
			?>
		
			
		    <table align="center" style="width:80%;margin-top:20px;border-bottom:1px solid;border-left:1px solid;border-right:1px solid;">
				<tr align="left">
				  <td rowspan="4" style="height:190px; width:180px;border-right:1px solid;border-top:1px solid;"> <img src="upload/<?php echo $data['photo'] ?> " style="height:190px; width:180px;"></td>
				 </tr>
				 
				 <tr align="left" style="font-size:18px; padding-left:10px;">
				  <th bgcolor="#d9d9d9" style="vertical-align:0px; padding-top:9px;border-top:1px solid;"><a style="color: #4675d2" href="">&nbsp;<?php echo $data['title'] ?></a></th>
				  <td bgcolor="#d9d9d9" align="center" style="vertical-align:0px; padding-top:9px;border-top:1px solid;"><?php echo $data['price'] ?>/-Rs</td>
				 </tr>
				 
				 <tr align="left" style="font-size:14px;">
				  <th bgcolor="#e6e6e6" style="vertical-align:0px;">&nbsp;<?php echo $data['description'] ?></th>
				  <td bgcolor="#e6e6e6"></td>
				 </tr>
				 
				 <tr align="left">
				  <th bgcolor="#f2f2f2" style="vertical-align:0px;">&nbsp; Mobile Number:<?php echo $data['mobile'] ?></th>
				  <td bgcolor="#f2f2f2"></td>
				 </tr>
				</table>
				<?php
}
}
else
{
select_all($con);
}
}
			  
?>			  
			  
			  
		</form>

		</div>
		</div>
	</div>
</div>  
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Farmer's Friend</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>

</body>
</html>
