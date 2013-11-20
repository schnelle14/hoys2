<!DOCTYPE html>

<html lang="$ContentLocale">
  <head>
		<% base_tag %>
		<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
		$MetaTags(false)
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<% require themedCSS(layout) %> 
		<% require themedCSS(typography) %> 
		<% require themedCSS(form) %> 
		
		<!--[if IE 6]>
			<style type="text/css">
			 @import url(themes/blackcandy/css/ie6.css);
			</style> 
		<![endif]-->
	</head>
<body>
	<div id="BgContainer">
		<div id="Container">
			<div id="Header">
				$SearchForm
		   		<h1>$SiteConfig.Title</h1>
		    	<p>$SiteConfig.Tagline</p>
		    	
		    	<% if Translations %>
				<div id="lang" class="clear">
					<ul class="clear">
					<% control Translations %>
						<li>
					    	<a href="$Link" hreflang="$Locale.RFC1766" title="$Title - $Locale.Nice">
					        	<img src="$ThemeDir/images/lang-<% sprintf(_t('IMAGE','%2.2s'),$Locale.RFC1766) %>.gif">
					        </a>
					    </li>
 					<% end_control %>
 					</ul>    
				</div>                
				<% end_if %>
				
			</div>
		
			<div id="Navigation">
				<% include Navigation %>
		  	</div>
	  	
		  	<div class="clear"><!-- --></div>
		
			<div id="Layout">
			  $Layout
			</div>
		
		   <div class="clear"><!-- --></div>
		</div>
		<div id="Footer">
			<% include Footer %>
		</div> 
	</div>
</body>
</html>