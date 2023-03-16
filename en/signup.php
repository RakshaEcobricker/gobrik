<!DOCTYPE html>
<html>
<head>
<?php $lang='en';?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

<!-- Gobrik Principal Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik | beta | Signup</title>
<meta name="keywords" content="gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->

<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"  content="1781710898523821" >
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1000" />
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above"/>
<meta property="og:locale" content="en_GB" />

<link rel="preload" as="image" href="https://gobrik.com/svgs/casandra.svg">

<script type="text/javascript">app_id="5b8c28c2a1152679c209ce0c";distribution_key="dist_53"; async</script>
        
<script type="text/javascript" src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_53/knack.js" async></script>

<?php require_once ("header.php");?>
 
<style>


/* Table of Contents Menu (background) */
.knack-overlay {

height: 100% !important;
width: 100%;
position: fixed;
z-index: 25;
top: 0;
left: 0;
overflow-y: scroll;
transition: 0.5s;
display: flex;
}


.kn-mobile-controls { 
  z-index: 26 !important;
  margin-top: 7px;
}
/*margin-left: 15px;
padding-left: 30px;*/
  
/*
#main-menu-button {
  right: 0px !important;
  margin-right: 70px !important;
}
*/

</style>

</head>

<body id="full-page" class="accessibility-plugin-ac">

    <div id="header-knack" class="top-menu">


    <!-- OLD MENU BUTTON <div><button type="button" class="main-menu-button" onclick="openMenu()" aria-label="Site menu"></button></div>-->

    <!-- GoBrik top logo.  Redirects to index-->
    <div>
      <button type="button" class="gobrik-logo" onclick="location.href='index.php'"  aria-label="Return to Home page"></button>
    </div>
  
    <!--  Room for icon buttons-->
    <div class="button-list" style="display:flex;position:absolute;right:0;width:fit-content;margin-right:15px;flex-flow:row;margin-top:22px;"m>
      
            <!--  A button to close, logout or return home 
            <div id="top-close-buttoner" style="display: contents;"><button type="button" class="top-close-button" onclick="closeKnack()" aria-label="Click to open settings page"></button></div>-->

            <!-- Settings and main pages button-->
            <div><button type="button" class="top-settings-button" onclick="openSettings()" aria-label="Click to open settings page"></button></div>


           <!-- Old languages button
            <div><button type="button" style="background: none;border: none;" class="settings-">
                <img src="../svgs/language-button2.svg" height="30px">
            </button></div>-->
               
    </div>
  </div> <!--CLoses header-->



    <!-- Remnant Knack top header  <div id="loading-box">
      <div id="header" class="top-menu">
			    <a href="/#home"><img src="svgs/gobrik-logo-3.svg?v1.1" width="185" height=""></a>
      </div>

      <script type="text/javascript">app_id="5b8c28c2a1152679c209ce0c";distribution_key="dist_53";</script><script type="text/javascript" src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_53/knack.js"></script><div id="knack-dist_53">Loading...</div>-->


  <!-- Main knack loader--> 
  <div id="knack-dist_53">
        <div class="loader"></div>
  </div>
        
<!--
  </div>
</div>

</div> landing page close-->

<?php require_once ("settings-curtain.php");?>
         
</body>

</html>
