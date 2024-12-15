<?php

//include '$incl_session_start.php';
session_start();
?>


<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>BSCRA New2024</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.4.6 - www.websitex5.com" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/index.php" />
		<meta property="og:title" content="Home Page" />
		<meta property="og:site_name" content="BSCRA New2024" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2024-4-6-1" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2024-4-6-1" media="print" />
		<link rel="stylesheet" href="style/style.css?2024-4-6-1" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2024-4-6-1" media="screen" />
		<link rel="stylesheet" href="appsresources/css/style.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/pluginAppObj_29/css/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/pluginAppObj_38/style.css" media="screen, print" />
		<style type="text/css">#pluginAppObj_41 { width: 100%; }</style>
		<style type="text/css">#pluginAppObj_42 { width: 100%; }</style>
		<link rel="stylesheet" href="pluginAppObj/pluginAppObj_49/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/pluginAppObj_50/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pcss/index.css?2024-4-6-1-638698575605058693" media="screen,print" />
		<script src="res/jquery.js?2024-4-6-1"></script>
		<script src="res/x5engine.js?2024-4-6-1" data-files-version="2024-4-6-1"></script>
		<script src="appsresources/js/main.js"></script>
		<script src="appsresources/icmBannerButton.js"></script>
		<script src="pluginAppObj/pluginAppObj_49/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		
		<style>
		#imFooterBg , #imFooter {position:fixed !important;     z-index:10;    bottom:0px !important;  justify-content-center !important;}
		</style>
		
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">BSCRA New2024</h1>
						<div id="imHeaderObjects"><div id="imHeader_imMenuObject_01_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_01"><div id="imHeader_imMenuObject_01_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.php,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.php">
Home Page		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/member-lists.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="member-lists.php">
Member Lists		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/contact.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="contact.php">
contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_01_settings = {
	'menuId': 'imHeader_imMenuObject_01',
	'responsiveMenuEffect': 'none',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 0,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_01_settings)});
$(function () {$('#imHeader_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_01_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_01_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div><div id="imHeader_imObjectTitle_03_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectTitle_03"><span id ="imHeader_imObjectTitle_03_text" >BSCRA Members</span></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectTitle_02"><span id ="imStickyBar_imObjectTitle_02_text" >BSCRA Members</span></div></div><div id="imStickyBar_imMenuObject_03_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_03"><div id="imStickyBar_imMenuObject_03_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.php,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.php">
Home Page		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/member-lists.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="member-lists.php">
Member Lists		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/contact.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="contact.php">
contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_03_settings = {
	'menuId': 'imStickyBar_imMenuObject_03',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_03_settings)});
$(function () {$('#imStickyBar_imMenuObject_03_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="images/empty-GT_imagea-1-.png" title="" alt="" width="140" height="140" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imPageRow_1" class="imPageRow">
						
						</div>
						<div id="imCell_2" class=""> <div id="imCellStyleGraphics_2"></div><div id="imCellStyleBorders_2"></div><div id="imTextObject_02">
							<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imTextObject_02_tab0" style="opacity: 1; ">
								<div class="text-inner">
									<div class="imHeading2"><span class="cf1">BSCRA Slot Racing Centre</span></div><div><div class="imHeading6">Our &nbsp;purpose built 8 lane track was built for the 2019 ISRA World &nbsp;Championship. It is constantly maintained and provides the ultimate &nbsp;challenge for drivers of all abilities.</div></div>
								</div>
							</div>
						
						</div>
						</div><div id="imCell_5" class=""> <div id="imCellStyleGraphics_5"></div><div id="imCellStyleBorders_5"></div><div id="imObjectImage_05"><div id="imObjectImage_05_container"><img src="images/logo.png" title="" alt="" width="200" height="229" />
						</div></div></div><div id="imCell_17" class=""> <div id="imCellStyleGraphics_17"></div><div id="imCellStyleBorders_17"></div><div id="imObjectImage_17"><div id="imObjectImage_17_container"><img src="images/n15.png" title="" alt="" width="449" height="235" />
						</div></div></div><div id="imPageRow_2" class="imPageRow">
						<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden;"><div id="imPageRowGraphics_2"></div></div>
						</div>
						<div id="imCell_29" class=""> <div id="imCellStyleGraphics_29"></div><div id="imCellStyleBorders_29"></div><!-- Animated Headlines v.17 --><div id="pluginAppObj_29">
						
							  <div class="cd-intro"><p class="cd-headline slide"><span>Renew your Membership or Join us&nbsp;</span><span class="cd-words-wrapper"></span></p></div>
						   </div></div><div id="imCell_40" class=""> <div id="imCellStyleGraphics_40"></div><div id="imCellStyleBorders_40"></div><div id="imHTMLObject_40" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						// remove all session variables
						session_unset();
						
						// destroy the session
						session_destroy();
						//echo "All session variables are now removed, and the session is destroyed." 
						?>
						
						</div></div><div id="imPageRow_3" class="imPageRow">
						<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden;"><div id="imPageRowGraphics_3"></div></div>
						</div>
						<div id="imCell_35" class=""> <div id="imCellStyleGraphics_35"></div><div id="imCellStyleBorders_35"></div><div id="imHTMLObject_35" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_renew_form_adult.php';
						?>
						<!--
						 <div style="background:#3333ff;width:100%;">
						     <h2>Adult Renew V3.3</h2>
						     <hr>
						     <h3>Use this form to renew your membership as a <span style="color:red;">UK Adult</span> member at £13 per year.</h3>
						     <form action="renew_all.php?memtype=a" method="post">
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">BSCRA id </span>
						             <input type="text" required="required" name="bscraid">
						         </div>
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">Email </span>
						             <input type="email" required="required" name="email">
						         </div>
						         <br><br>
						         <div>
						             <input type="submit" value="submit">
						         </div>
						     </form>
						     <br><br>
						 </div>
						--></div></div><div id="imCell_36" class=""> <div id="imCellStyleGraphics_36"></div><div id="imCellStyleBorders_36"></div><div id="imHTMLObject_36" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_renew_form_junior.php';
						?>
						
						<!--
						<div style="width: xx24rem;background:#99FF99;">
						    <h2>Junior Renew V3.3</h2>
						    <hr>
						    <h3>Use this form to renew your membership as a <span style="color:red;">UK JUNIOR</span> member at £6.50 per year.</h3>
						    <form action="renew_all.php?memtype=j" method="post">
						        <br>
						        <div>
						            <span style="color:blue;font-size:2rem;">BSCRA id </span>
						            <input type="text" required="required" name="bscraid">
						        </div>
						        <br>
						        <div>
						            <span style="color:blue;font-size:2rem;">Email </span>
						            <input type="email" required="required" name="email">
						        </div>
						        <br><br>
						        <div>
						            <input type="submit" value="submit">
						        </div>
						    </form>
						    <br><br>
						</div>
						--></div></div><div id="imCell_37" class=""> <div id="imCellStyleGraphics_37"></div><div id="imCellStyleBorders_37"></div><div id="imHTMLObject_37" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_renew_form_club.php';
						?>
						
						<!--
						 <div style="width: xx24rem;background:#ff6666;">
						     <h2>Club Renew V3.3</h2>
						     <hr>
						     <h3>Use this form to renew your membership as a <span style="color:blue;">UK CLUB</span> member at £13 per year.</h3>
						     <form action="renew_all.php?memtype=c" method="post">
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">BSCRA id </span>
						             <input type="text" required="required" name="bscraid">
						         </div>
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">Email </span>
						             <input type="email" required="required" name="email">
						         </div>
						         <br><br>
						         <div>
						             <input type="submit" value="submit">
						         </div>
						     </form>
						     <br><br>
						 </div>
						 --></div></div><div id="imCell_42" class=""> <div id="imCellStyleGraphics_42"></div><div id="imCellStyleBorders_42"></div><!-- Simple Separator v.2 --><div id="pluginAppObj_42">
						            <div style="width: 100%; height: 40px"></div>
						        </div></div><div id="imCell_43" class=""> <div id="imCellStyleGraphics_43"></div><div id="imCellStyleBorders_43"></div><div id="imTextObject_43">
							<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imTextObject_43_tab0" style="opacity: 1; ">
								<div class="text-inner">
									<div class="imHeading5"><div class="imTACenter"><span class="fs18lh1-5 cf1">The facility to join us as a New Member isn't currently available.</span></div><div class="imTACenter"><span class="fs18lh1-5 cf1">Please use the contact form to contact Admin.</span></div></div>
								</div>
							</div>
						
						</div>
						</div><div id="imCell_41" class=""> <div id="imCellStyleGraphics_41"></div><div id="imCellStyleBorders_41"></div><!-- Simple Separator v.2 --><div id="pluginAppObj_41">
						            <div style="width: 100%; height: 400px"></div>
						        </div></div><div id="imCell_50" class=""> <div id="imCellStyleGraphics_50"></div><div id="imCellStyleBorders_50"></div><!-- Separator v.3 --><div id="pluginAppObj_50"><div id="separator_pluginAppObj_50">   <div class="separator-line left-line"></div>
						   <div class="separator-text">PLEASE DO NOT USE BELOW HERE !!</div>
						   <div class="separator-line right-line"></div>
						</div>
						</div></div><div id="imCell_38" class=""> <div id="imCellStyleGraphics_38"></div><div id="imCellStyleBorders_38"></div><!-- Sticky Button v.2 --><div id="pluginAppObj_38"><a href="http://www.slotmembers.com/table_page.php" target="_blank">
						<div class="icm_stickybutton icm_stickybuttonhidden" 
						        id="icm_stickybuttonpluginAppObj_38" 
						        data-icmstickybuttondelay="1" 
						        data-icmstickybuttonposition="lefttop" 
						    >
						<img src='pluginAppObj/pluginAppObj_38/logo-sm.png'>Member Lists
						</div>
						</a></div></div><div id="imCell_49" class=""> <div id="imCellStyleGraphics_49"></div><div id="imCellStyleBorders_49"></div><!-- Login & Logout v.1 --><div id="pluginAppObj_49"><div id="imLogin" class="imLoginC no_display layout_row">    <form method="post" action="imlogin.php" onsubmit="_jq(this).attr('action', x5engine.settings.currentPath + 'imlogin.php'); return (x5engine.utils.isOnline() || !x5engine.utils.showOfflineMessage('Login & Logout - '+x5engine.l10n.get('cmn_only_when_online'),undefined,undefined,undefined,'loginlogout_'+x5engine.l10n.get('cmn_only_when_online'),0));">     <div class="imLoginBlockInputWrapper">        <div class="imLoginBlock imLoginBlockInput loginfontSize">            <input type="text" placeholder="Username:" name="imUname" id='imUname_pluginAppObj_49' class=" loginInputCustomStyle loginInputOptionStyle ">        </div>        <div class="imLoginBlock imLoginBlockInput loginfontSize">            <input type="password" placeholder="Password:" name="imPwd" id='imPwd_pluginAppObj_49' class=" loginInputCustomStyle loginInputOptionStyle ">        </div>     </div>        <div class="imLoginBlock imLoginBlockPulsante loginfontSize">            <input type="submit" value="Login" class="imLoginSubmit  btnCustomStyle btnOptionStyle ">        </div>    </form></div><div class="imLogoutC no_display"><span class="logout_intro customStyle">Hi</span><a class="imLogoutAnchor customStyle customOption" href="#">Logout</a></div>
						<script>
						    loginlogout_pluginAppObj_49();
						</script></div></div><div id="imPageRow_4" class="imPageRow">
						
						</div>
						<div id="imCell_47" class=""> <div id="imCellStyleGraphics_47"></div><div id="imCellStyleBorders_47"></div><div id="imHTMLObject_47" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_new_form_club.php';
						?>
						<!--
						 <div style="background:#3333ff;width:100%;">
						     <h2>Adult Renew V3.3</h2>
						     <hr>
						     <h3>Use this form to renew your membership as a <span style="color:red;">UK Adult</span> member at £13 per year.</h3>
						     <form action="renew_all.php?memtype=a" method="post">
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">BSCRA id </span>
						             <input type="text" required="required" name="bscraid">
						         </div>
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">Email </span>
						             <input type="email" required="required" name="email">
						         </div>
						         <br><br>
						         <div>
						             <input type="submit" value="submit">
						         </div>
						     </form>
						     <br><br>
						 </div>
						--></div></div><div id="imCell_45" class=""> <div id="imCellStyleGraphics_45"></div><div id="imCellStyleBorders_45"></div><div id="imHTMLObject_45" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_new_form_adult.php';
						?>
						<!--
						 <div style="background:#3333ff;width:100%;">
						     <h2>Adult Renew V3.3</h2>
						     <hr>
						     <h3>Use this form to renew your membership as a <span style="color:red;">UK Adult</span> member at £13 per year.</h3>
						     <form action="renew_all.php?memtype=a" method="post">
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">BSCRA id </span>
						             <input type="text" required="required" name="bscraid">
						         </div>
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">Email </span>
						             <input type="email" required="required" name="email">
						         </div>
						         <br><br>
						         <div>
						             <input type="submit" value="submit">
						         </div>
						     </form>
						     <br><br>
						 </div>
						--></div></div><div id="imCell_46" class=""> <div id="imCellStyleGraphics_46"></div><div id="imCellStyleBorders_46"></div><div id="imHTMLObject_46" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><?php
						include 'A24_incl_new_form_junior.php';
						?>
						<!--
						 <div style="background:#3333ff;width:100%;">
						     <h2>Adult Renew V3.3</h2>
						     <hr>
						     <h3>Use this form to renew your membership as a <span style="color:red;">UK Adult</span> member at £13 per year.</h3>
						     <form action="renew_all.php?memtype=a" method="post">
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">BSCRA id </span>
						             <input type="text" required="required" name="bscraid">
						         </div>
						         <br>
						         <div>
						             <span style="color:yellow;font-size:2rem;">Email </span>
						             <input type="email" required="required" name="email">
						         </div>
						         <br><br>
						         <div>
						             <input type="submit" value="submit">
						         </div>
						     </form>
						     <br><br>
						 </div>
						--></div></div>
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
