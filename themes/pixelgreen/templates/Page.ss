<!doctype html>
 <head>
		<% base_tag %>
		
		$MetaTags

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/mysite/thirdparty/fancybox/jquery.fancybox.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/mysite/thirdparty/fancybox/helpers/jquery.fancybox-thumbs.css"  media="screen" />


		
</head>
<body class="$BodyCssClass">
<!-- wrap starts here -->
<div id="wrap">
	<div id="header">
		<div id="header-content">	
			
			$HomePageObject.Logo_Image
			
			<% if Translations %>
			<div id="lang" class="clear">
				<ul class="clear">
			  	<% control Translations %>
			    <li class="lang-flag">
			        <a href="$Link" hreflang="$Locale.RFC1766" title="$Title - $Locale.Nice">
			            <img src="$ThemeDir/images/lang-<% sprintf(_t('IMAGE','%2.2s'),$Locale.RFC1766) %>.gif">
			           <% _t('language','English') %>
			        </a>
			    </li>
			 	<% end_control %>
				</ul>    
			</div>                
			<% end_if %>
				
			<% include Navigation %>	
		</div>
	</div>
	
	<% if isHomePage %>
	<div class="home_hero_image">
		$Home_HeroImage.SetWidth(1600)
	</div>
	<% else %>
	<div class="hero_image">
		<p class="pagetitle">$Title</p>
		<% if heroImageExists %>$Small_HeroImage.SetWidth(1600)<% else %>$HomePageObject.SmallDefault_HeroImage<% end_if %>
	</div>
	<% end_if %>
			
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">		
		<div id="main">		
			$Layout					
		</div>					
		
	<!-- content-wrap ends here -->		
	</div></div>
<!-- footer starts here -->	
<% include Footer %>
<!-- footer ends here -->	
<!-- wrap ends here -->
</div>
<script type="text/javascript" src="/mysite/thirdparty/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/mysite/thirdparty/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/mysite/thirdparty/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="/mysite/thirdparty/jquery.PrintArea.js"></script>
<script type="text/javascript" src="/mysite/js/hoys.js"></script>
</body>

</html>

