<?php
class ContactUsPage extends Page {
	static $db = array(
			'Landline_no' => 'Text',
			'Mobile_no'   => 'Text',
			'Fax_no'      => 'Text',
			'Postal_add'  => 'Text',
			'Team_email'  => 'Text'
	);
	
	static $has_many = array(
			'StaffContacts'    => 'StaffContact'
	);
	
	static $has_one = array (
	
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
			
		$fields->addFieldToTab('Root.Content.TeamContacts', new TextField('Landline_no', 'Landline number'));
		$fields->addFieldToTab('Root.Content.TeamContacts', new TextField('Mobile_no', 'Mobile number'));
		$fields->addFieldToTab('Root.Content.TeamContacts', new TextField('Fax_no', 'Fax number'));
		$fields->addFieldToTab('Root.Content.TeamContacts', new TextField('Postal_add', 'Postal Address'));
		$fields->addFieldToTab('Root.Content.TeamContacts', new TextField('Team_email', 'Team Email Address'));
		
		// Add the Staff Contacts tab
		$fields->addFieldToTab('Root.Content', new Tab("StaffContacts"));
		
		$contactsTablefield = new HasManyComplexTableField(
				$this,
				'StaffContacts',
				'StaffContact',
				array(	
						'Name'					=> 'Name',
						'MobileNo1'             => 'Mobile# 1',
						'MobileNo2'             => 'Mobile# 2',
						'Landline'  	        => 'Landline',
						'Email'		            => 'Email Address'
				),
				'getCMSFields_forPopup'
		);
		$fields->addFieldToTab('Root.Content.StaffContacts', $contactsTablefield);
        
		return $fields;
	}
}
class ContactUsPage_Controller extends Page_Controller {

	//public function init(){
		//$this->StaffContacts = DataObject::get("StaffContact");
	//}
	
	public function landLineExists(){
		if ($this->Landline_no == null){
			return false;
		}
		return true;
	}
	public function mobileNoExists(){
		if ($this->Mobile_no == null){
			return false;
		}
		return true;
	}
	public function faxNoExists(){
		if ($this->Fax_no == null){
			return false;
		}
		return true;
	}
	public function postalAddExists(){
		if ($this->Postal_add == null){
			return false;
		}
		return true;
	}
	public function teamEmailExists(){
		//$tempo1 = DataObject::get("StaffContact");
		//var_dump($this->StaffContacts); exit;
		if ($this->Team_email == null){
			return false;
		}
		return true;
	}
	
	public function getStaffContacts(){
		$contacts = DataObject::get("StaffContact");
		return $contacts;
	}
	
}