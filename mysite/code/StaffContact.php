<?php
class StaffContact extends DataObject {

	static $db = array(
			'Name'		=> 'Text',
			'MobileNo1' => 'Text',
			'MobileNo2' => 'Text',
			'Landline'  => 'Text',
			'Email'		=> 'Text'
	);

	static $has_one = array(
			'MyContactUsPage' => 'ContactUsPage'
	);
	
	function getCMSFields_forPopup() {
		$fields = new FieldSet();
		 
		$fields->push( new TextField( 'Name', 'Name' ) );
		$fields->push( new TextField( 'MobileNo1', 'Mobile# 1' ) );
		$fields->push( new TextField( 'MobileNo2', 'Mobile# 2' ) );
		$fields->push( new TextField( 'Landline', 'Landline' ) );
		$fields->push( new TextField( 'Email', 'Email Address' ) );
		 
		return $fields;
	}

}