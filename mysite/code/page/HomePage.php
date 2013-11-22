<?php
class HomePage extends Page {
	static $db = array(
			'Welcome_Msg' => 'Text'
	);
	static $has_one = array(
			'Home_HeroImage' => 'Image',
			'Logo_Image'     => 'Image',
			'SmallDefault_HeroImage' => 'Image'
	);
	 
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeByName('Small_HeroImage');
		 
		$fields->addFieldToTab('Root.Content.Main', new TextField('Welcome_Msg', 'Welcome Message'), 'Content');
		
		$fields->addFieldToTab("Root.Content.Images", new ImageField('Home_HeroImage', 'Hero Image (1600 x 420)'));
		$fields->addFieldToTab("Root.Content.Images", new ImageField('Logo_Image', 'Company Logo (200 x 100)'));
		$fields->addFieldToTab("Root.Content.Images", new ImageField('SmallDefault_HeroImage', 'Default Hero Image for other pages (1600 x 230)'));
		 
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
	public function getLogo(){
		return $this->Logo_Image;
	}
}