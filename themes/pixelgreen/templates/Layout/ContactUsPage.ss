<div class="typography">

		$Content
		
		<% if landLineExists %>
		<div class="team_contact">
			<p class="big_contact_label"><% _t('landline','Landline') %>:</p>
			<p>$Landline_no</p>
		</div>
		<% end_if %>
		
		<% if mobileNoExists %>
		<div class="team_contact">
			<p class="big_contact_label"><% _t('mobile','Mobile') %>:</p>
			<p>$Mobile_no</p>
		</div>
		<% end_if %>
		
		<% if faxNoExists %>
		<div class="team_contact">
			<p class="big_contact_label"><% _t('fax','Fax') %>:</p>
			<p>$Fax_no</p>
		</div>
		<% end_if %>
		
		<% if postalAddExists %>
		<div class="team_contact">
			<p class="big_contact_label"><% _t('postal_address','Postal Address') %>:</p>
			<p>$Postal_add</p>
		</div>
		<% end_if %>
		
		<% if teamEmailExists %>
		<div class="team_contact">
			<p class="big_contact_label"><% _t('email','Email') %>:</p>
			<p>$Team_email</p>
		</div>
		<% end_if %>
		
		<div class="staff_contact_container">
		<% if isEnglish %>
		<% control getStaffContacts %>
			<div class="staff_contact">
				<table>
					
					<tr>
						<td class="contact_name" colspan="2">$Name_en</td>
					</tr>
							
					<% if MobileNo1 %>
					<tr>
						<td class="small_contact_label"><% _t('mobile','Mobile') %>:</td>
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
						<td class="small_contact_label"><% _t('landline','Landline') %>:</td>
						<td>$Landline</td>
					</tr>
					<% end_if %>
					
					<% if Email %>
					<tr>
						<td class="small_contact_label"><% _t('email','Email') %>:</td>
						<td>$Email</td>
					</tr>
					<% end_if %>
				</table>
			</div>
		<% end_control %>
		<% end_if %>
		
		<% if isChinese %>
		<% control getStaffContacts %>
			<div class="staff_contact">
				<table>
					
					<tr>
						<td class="contact_name" colspan="2">$Name_zh</td>
					</tr>
							
					<% if MobileNo1 %>
					<tr>
						<td class="small_contact_label"><% _t('mobile','Mobile') %>:</td>
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
						<td class="small_contact_label"><% _t('landline','Landline') %>:</td>
						<td>$Landline</td>
					</tr>
					<% end_if %>
					
					<% if Email %>
					<tr>
						<td class="small_contact_label"><% _t('email','Email') %>:</td>
						<td>$Email</td>
					</tr>
					<% end_if %>
				</table>
			</div>
		<% end_control %>
		<% end_if %>
		</div>
</div>


