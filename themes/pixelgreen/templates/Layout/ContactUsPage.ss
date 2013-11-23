<div class="typography">

		$Content
		
		<% if landLineExists %>
		<div class="team_contact">
			<p class="big_contact_label">Landline:</p>
			<p>$Landline_no</p>
		</div>
		<% end_if %>
		
		<% if mobileNoExists %>
		<div class="team_contact">
			<p class="big_contact_label">Mobile:</p>
			<p>$Mobile_no</p>
		</div>
		<% end_if %>
		
		<% if faxNoExists %>
		<div class="team_contact">
			<p class="big_contact_label">Fax:</p>
			<p>$Fax_no</p>
		</div>
		<% end_if %>
		
		<% if postalAddExists %>
		<div class="team_contact">
			<p class="big_contact_label">Postal Address:</p>
			<p>$Postal_add</p>
		</div>
		<% end_if %>
		
		<% if teamEmailExists %>
		<div class="team_contact">
			<p class="big_contact_label">Email:</p>
			<p>$Team_email</p>
		</div>
		<% end_if %>
		
		<div class="staff_contact_container">
		<% control getStaffContacts %>
			<div class="staff_contact">
			
				
				<table>
					<% if Name %>
					<tr>
						<td class="contact_name" colspan="2">$Name</td>
					</tr>
					<% end_if %>
					
					<% if MobileNo1 %>
					<tr>
						<td class="small_contact_label">Mob:</td>
						<td>$MobileNo1</td>
					</tr>
					<% end_if %>
					
					<% if MobileNo2 %>
					<tr>
						<td></td>
						<td>$MobileNo2</td>
					</tr>
					<% end_if %>
					
					<% if Landline %>
					<tr>
						<td class="small_contact_label">Phone:</td>
						<td>$Landline</td>
					</tr>
					<% end_if %>
					
					<% if Email %>
					<tr>
						<td class="small_contact_label">Email:</td>
						<td>$Email</td>
					</tr>
					<% end_if %>
				</table>
			</div>
		<% end_control %>
		</div>
</div>


