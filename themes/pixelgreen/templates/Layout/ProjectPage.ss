<div class="typography">	
		<div class="project_image">
		$ProjectImage.SetSize(630, 420)
		</div>
		<div class="project_content">
			$Content
		</div>
		<div class="project_links">
			<ul>
				<% if pdfExists %>
				<li><a href="$PdfDocument.Link"><img src="themes/pixelgreen/images/icon_pdf.png" alt=""/></a><a class="link_label" href="$PdfDocument.Link">Download PDF</a></li>
				<% end_if %>
			</ul>
		</div>
</div>

<div class="more_projects">
	<h3>MORE PROJECTS</h3>
	<% control getMoreProjects %>
		<a href="$page.Link">$page.ProjectImage</a>
		<p><a href="$page.Link">$page.Title</a></p>
	<% end_control %>
</div>


