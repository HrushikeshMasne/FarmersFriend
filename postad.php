<?php
session_start();
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$email=$_SESSION['email'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$title=$_POST['title'];
$category=$_POST['category'];
$description=$_POST['description'];
$price=$_POST['price'];
$imagename=$_FILES['photo']['name'];
$tempname=$_FILES['photo']['tmp_name'];   //fore storing images.

move_uploaded_file($tempname,"upload/$imagename");

$query="INSERT INTO `postad`(`name`, `mobile`,`email`, `address`, `city`, `state`, `pincode`, `title`, `category`, `description`, `photo`,`price`)
       VALUES('$name','$mobile','$email','$address','$city','$state','$pincode','$title','$category','$description','$imagename','$price')";

$run=mysqli_query($con,$query);
if($run==true)
{
$last_id = mysqli_insert_id($con);
?>

<script>
alert('Your post added succesfully !Your AdID is <?php echo $last_id;?>');
</script>

<?php
}
else
{
echo "error";
}
}
if(isset($_POST['delete']))
{
$email=$_SESSION['email'];
$id=$_POST['id'];
$query="DELETE FROM `postad` WHERE  email='$email' AND id='$id'";
$run=mysqli_query($con,$query);
if($run==true)
{
?>

<script>
alert('Your Post deleted succesfully !');
</script>

<?php
}
else
{
echo "error";
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
<?php echo "Welcome ".$_SESSION["email"];?> 
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
    <a class="brand" href="index.html"><img src="themes/images/logo.png" height="193px" alt="Bootsshop"/></a>
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>Farm-Animals</option>
			<option>Agri-Information</option>
			<option>Farm Land-Resale</option>
			<option>Tools-Machinary</option>
			<option>Seeds-Fertilizers</option>
			<option>Fruits</option>
			<option>Vegetables-Flowers</option>
			<option>Grains-Pulses</option>
			<option>Fish-Meat</option>
			<option>Exporters-Traders</option>
			<option>Dairy-Products</option>
			<option></option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	  <li><div id="google_translate_element"></div><script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
	
	 <li class="">
	 <a href="login.php" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
		<!--<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>-->
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> FORM-ANIMALS []</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cow () </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Ox()</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Dog()</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Buffalo ()</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> TOOLS-MACHINARY[] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Water Pumps()</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Trailer ()</a></li>												
														
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
		  </div><br/>
			<div class="thumbnail">
			  </div><br/>
			<div class="thumbnail">
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Post ad</li>
    </ul>
	
	<form method="post" action="postad.php" enctype="multipart/form-data">
	
	<h3> Add your Ad details
	
	<div style="float:right" class="control-group">
			<div class="controls">
			 <input type="text" name="id" placeholder="Enter AdID to delete ad"/>
				<input class="btn btn-large btn-success" name="delete" type="submit" value="Delete Post" />
			</div>
		</div>	
	</h3>


		
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<div class="form-horizontal" >
		<h4>Your personal information</h4>
		<div style="border-style: solid;  border-color: grey;border-width:1px;">	
		<br/>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Name<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="name" placeholder="Name">
			</div>
		 </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Mobile Number<sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="mobile" placeholder="Mobile Number">
		</div>
	  </div>  </div>	  

		<h4>Your address</h4>
		
	<div style="border-style: solid;  border-color: grey;border-width:1px;">	
	<br/>
	<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="address" placeholder="Adress"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="city" placeholder="city"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state">State<sup>*</sup></label>
			<div class="controls">
			  <select name="state" >
				<option value="">-</option>
				<option value="maharashtra">Maharashtra</option><!--</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
			-->
			</select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="pincode" placeholder="Zip / Postal Code"/> 
			</div>
		</div>  </div>
		
	
		<h4> Product Information</h4>
<div style="border-style: solid;  border-color: grey;border-width:1px;">		
<br/>
		<div class="control-group">
			<label class="control-label" for="phone">Ad Title <sup>*</sup></label>
			<div class="controls">
			  <input type="text"  name="title" placeholder="Ad Title"/>
			  </div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Category</label>
			<div class="controls">
			   <select name="category">
			   <option>-</option>
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
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="phone">Ad Description <sup>*</sup></label>
			<div class="controls">
			  <textarea type="text"  name="description" rows="4" placeholder="Your Ad description" ></textarea>
			  </div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="phone">Upload Photos <sup>*</sup></label>
			<div class="controls">
			<p><input type="file" name="photo" />
			  </div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Price<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="price" placeholder="Price"><span>Enter amount in Rupees only.</span>
			</div>
		 </div>	 
		</div>
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="submit" type="submit" value="Post Ad" />
			</div>
		</div>		
	</div></form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
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
		<p class="pull-right">&copy; Bootshop</p>
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