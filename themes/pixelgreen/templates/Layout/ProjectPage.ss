<div class="typography">	
		<div class="project_image">
		$ProjectImage.SetSize(630, 420)
		</div>
		<div class="project_content">
			$Content
		</div>
		<div class="project_links">
			<ul>
				<% if getProjectImages %>
				<li>
					<a class="link_to_fancy" href="#project_gallery">
						<img src="themes/pixelgreen/images/icon_gallery.png" alt=""/>
					</a>
					<a class="link_label link_to_fancy" href="#project_gallery">
						View Gallery
					</a>
				</li>
				<% end_if %>
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

<div id="project_gallery" style="display:none">
	<% control getProjectImages %>
	<a class="fancybox-thumb" rel="fancybox-thumb" href="$Image.Link" title="$ImageDesc"></a>
	<% end_control %>
</div>

