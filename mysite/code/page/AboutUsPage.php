<?php
class AboutUsPage extends Page {
	static $has_many = array(
			'StaffAbouts'    => 'StaffAbout'
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		// Add the Staff Contacts tab
		$fields->addFieldToTab('Root.Content', new Tab("StaffDetails"));
		
		$staffsTablefield = new HasManyComplexTableField(
				$this,
				'StaffAbouts',
				'StaffAbout',
				array(	
						'Photo'                 => 'Photo (175 x 175)',
						'Name_en'					=> 'Name_en',
						'Name_zh'					=> 'Name_chinese',
						'Position_en'              => 'Position_en',
						'Position_zh'              => 'Position_chinese',
						'Description_en'           => 'Description_en',
						'Description_zh'           => 'Description_chinese'
				),
				'getCMSFields_forPopup'
		);
		$fields->addFieldToTab('Root.Content.StaffDetails', $staffsTablefield);
        
		return $fields;
	}
}
class AboutUsPage_Controller extends Page_Controller {

	public function getStaffAbouts(){
		$staffs = DataObject::get("StaffAbout");
		return $staffs;
	}
	
}