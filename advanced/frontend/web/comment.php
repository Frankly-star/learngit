<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Comment</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/> -->
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<style>
$baseColor: #;
$borderRadius: 10px;
$imageBig: 100px;
$imageSmall: 60px;
$padding: 10px;

body {
   background-color: lighten($baseColor, 30%);
   * { box-sizing: border-box; }
}

.header {
   background-color: darken($baseColor, 5%);
   color: green;
   font-size: 1.5em;
   padding: 1rem;
   text-align: center;
   text-transform: uppercase;
}


.table-users {
   border: 1px solid darken($baseColor, 5%);
   border-radius: $borderRadius;
   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
   max-width: calc(100% - 2em);
   margin: 1em auto;
   overflow: hidden;
   width: 800px;
}

table {
   width: 100%;
   
   td, th { 
      color: darken($baseColor, 10%);
      padding: $padding; 
   }
   
   td {
      text-align: center;
      vertical-align: middle;
      
      &:last-child {
         font-size: 0.95em;
         line-height: 1.4;
         text-align: left;
      }
   }
   
   th { 
      background-color: lighten($baseColor, 50%);
      font-weight: 300;
   }
   
   tr {     
      &:nth-child(2n) { background-color: white; }
      &:nth-child(2n+1) { background-color: lighten($baseColor, 55%) }
   }
}

@media screen and (max-width: 700px) {   
   table, tr, td { display: block; }
   
   td {
      &:first-child {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         width: $imageBig;
      }

      &:not(:first-child) {
         clear: both;
         margin-left: $imageBig;
         padding: 4px 20px 4px 90px;
         position: relative;
         text-align: left;

         &:before {
            color: lighten($baseColor, 30%);
            content: '';
            display: block;
            left: 0;
            position: absolute;
         }
      }

      &:nth-child(2):before { content: 'Name:'; }
      &:nth-child(3):before { content: 'Email:'; }
      &:nth-child(4):before { content: 'Phone:'; }
      &:nth-child(5):before { content: 'Comments:'; }
   }
   
   tr {
      padding: $padding 0;
      position: relative;
      &:first-child { display: none; }
   }
}

@media screen and (max-width: 500px) {
   .header {
      background-color: transparent;
      color: lighten($baseColor, 60%);
      font-size: 2em;
      font-weight: 700;
      padding: 0;
      text-shadow: 2px 2px 0 rgba(0,0,0,0.1);
   }
   
   img {
      border: 3px solid;
      border-color: lighten($baseColor, 50%);
      height: $imageBig;
      margin: 0.5rem 0;
      width: $imageBig;
   }
   
   td {
      &:first-child { 
         background-color: lighten($baseColor, 45%); 
         border-bottom: 1px solid lighten($baseColor, 30%);
         border-radius: $borderRadius $borderRadius 0 0;
         position: relative;   
         top: 0;
         transform: translateY(0);
         width: 100%;
      }
      
      &:not(:first-child) {
         margin: 0;
         padding: 5px 1em;
         width: 100%;
         
         &:before {
            font-size: .8em;
            padding-top: 0.3em;
            position: relative;
         }
      }
      
      &:last-child  { padding-bottom: 1rem !important; }
   }
   
   tr {
      background-color: white !important;
      border: 1px solid lighten($baseColor, 20%);
      border-radius: $borderRadius;
      box-shadow: 2px 2px 0 rgba(0,0,0,0.1);
      margin: 0.5rem 0;
      padding: 0;
   }
   
   .table-users { 
      border: none; 
      box-shadow: none;
      overflow: visible;
   }
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tennis Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- webfonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,600,800,700' rel='stylesheet' type='text/css'>
<!-- webfonts --> 
</head>
<body> 
<!----->
<div class="header">
	 <div class="container">
	 <div class="logo">
	 <a href="index.html"><img src="images/logo.png" alt=""/></a>
	 </div>
	 <div class="top-menu top">
			<span class="menu"> </span>
	   <ul>
			  <li class="simptip-position-bottom simptip-movable" data-tooltip="Home"><a class="home home-pg" href="index.html"></a></li>
			  <li class="simptip-position-bottom simptip-movable" data-tooltip="About"><a class="about" href="about.html"></a></li>
              <li class=" simptip-position-bottom simptip-movable" data-tooltip="Contact"><a class="contact" href="contact.html"></a></li>
			 <div class="clearfix"></div>
		 </ul>
				  <!--script-nav-->
			     <script src="js/popper.min.js"></script>
			     <script src="js/bootstrap-4.4.1.js"></script>
<script>
				 $("span.menu").click(function(){
				 $(".top-menu ul").slideToggle("slow" , function(){
				 });
				 });
				 </script>
				 <!--script-nav-->
	 </div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!----->
<div class="welcome">
  <div class="container">
  <div class="col-md-4 wel-left">
  <h3>Comment Page</h3>
  </div>
  <div class="clearfix"></div>
  </div>
</div>
<div class="page-not-found-main">
		<div class="container">
		
        <div class="table-users">
   <div class="header">Comment List</div>
   
   <table cellspacing="0">
      <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th width="230">Comments</th>
      </tr>

      <tr>
         <td>Jane Doe</td>
         <td>jane.doe@foo.com</td>
         <td>01 800 2000</td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
      </tr>

      <tr>
         <td>John Doe</td>
         <td>john.doe@foo.com</td>
         <td>01 800 2000</td>
         <td>Blanditiis, aliquid numquam iure voluptatibus ut maiores explicabo ducimus neque, nesciunt rerum perferendis, inventore.</td>
      </tr>

      <tr>
         <td>Jane Smith</td>
         <td>jane.smith@foo.com</td>
         <td>01 800 2000</td>
         <td> Culpa praesentium unde pariatur fugit eos recusandae voluptas.</td>
      </tr>
      
      <tr>
         <td>John Smith</td>
         <td>john.smith@foo.com</td>
         <td>01 800 2000</td>
         <td>Aut voluptatum accusantium, eveniet, sapiente quaerat adipisci consequatur maxime temporibus quas, dolorem impedit.</td>
      </tr>
   </table>
</div>
  </div>
</div>		
</div>
<!----->
<div class="fotter">
	 <div class="container">
		 <div class="col-md-3 ftr-logo">
		 <a href="index.html"><img src="images/logo2.png" alt=""/></a>		 
		 </div>
		 <div class="col-md-3 address">
			 <h4>Address</h4>
			 <ul class="address-info">
			     <li><span></span></li>
				 <li><p>Tongjian Road 38 JinNan District</p>
				 <p>NKU TianJin PRC</p>
				 <p></p></li>
			 </ul>
		 </div>
		 <div class="col-md-6 touch">
			 <h4>COMMENT ON THIS</h4>
			 <div class="form">
			 <form>
				 <input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
				 <input type="submit" value="Comment">
			 </form>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!----->
</body>
</html>