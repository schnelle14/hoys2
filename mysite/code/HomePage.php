<?php
class HomePage extends Page {
	static $db = array(
	);
	static $has_one = array(
			'Home_HeroImage' => 'Image',
			'Logo_Image'     => 'Image'
	);
	 
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		 
		 $fields->addFieldToTab("Root.Content.Images", new ImageField('Home_HeroImage', 'Hero Image (1600 x 420)'));
		 $fields->addFieldToTab("Root.Content.Images", new ImageField('Logo_Image', 'Company Logo (200 x 100)'));
		 
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
	public function getLogo(){
		return $this->Logo_Image;
	}
}