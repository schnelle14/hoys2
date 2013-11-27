<div class="typography">

	$Content
	<% if isEnglish %>
	<div class="staff_container">
		<% control getStaffAbouts %>
			<div class="staff_detail">
			
				<table>
					<tr class="staff_photo">
						<td>
						$Photo.SetSize(176,176)
						</td>
					</tr>
					<tr class="staff_name">
						<td>
							$Name_en
						</td>
					</tr>
					<tr class="staff_position">
						<td>
							$Position_en
						</td>
					</tr>
					<tr class="staff_description">
						<td>
							$Description_en
						</td>
					</tr>
				</table>
				
			</div>
		<% end_control %>
	</div>
	<% end_if %>
	
	<% if isChinese %>
	<div class="staff_container">
		<% control getStaffAbouts %>
			<div class="staff_detail">
			
				<table>
					<tr class="staff_photo">
						<td>
						$Photo.SetSize(176,176)
						</td>
					</tr>
					<tr class="staff_name">
						<td>
							$Name_zh
						</td>
					</tr>
					<tr class="staff_position">
						<td>
							$Position_zh
						</td>
					</tr>
					<tr class="staff_description">
						<td>
							$Description_zh
						</td>
					</tr>
				</table>
				
			</div>
		<% end_control %>
	</div>
	<% end_if %>
	
</div>


