<div class="typography">
		$Content
</div>
	
<h3>Completed Projects</h3>	
<div class="projects_container_div">
	<% control getCompletedProjects %>
	<div class="project_holder">
		<a href="$page.Link">$page.ProjectImage</a>
		<p><a href="$page.Link">$page.Title</a></p>
	</div>
	<% end_control %>
</div>
	
<h3>Current Projects</h3>
<div class="projects_container_div">		
	<% control getCurrentProjects %>
	<div class="project_holder">
		<a href="$page.Link">$page.ProjectImage</a>
		<p><a href="$page.Link">$page.Title</a></p>
	</div>
	<% end_control %>
</div>	

