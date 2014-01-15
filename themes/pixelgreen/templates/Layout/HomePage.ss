<div class="typography">
	<div id="home_welcome">
		$Welcome_Msg
	</div>
		$Content
		
</div>
<div id="latest_projects">
	<p class="home_label"><% _t('latest','Latest Projects') %></p>
	<% control getProject1 %>
		<div class="left_image">
			<a href="$Link">$ProjectImage</a>
			<p><a href="$Link">$Title</a></p>
		</div>
	<% end_control %>
	
	<% control getProject2 %>
		<div class="right_image">
			<a href="$Link">$ProjectImage</a>
			<p><a href="$Link">$Title</a></p>
		</div>
	<% end_control %>
</div>

