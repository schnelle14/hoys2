<?php
class ProjectPage extends Page {
	
	static $allowed_children = "none";
	
	static $db = array(
		'ProjectStatus' => 'Text'
	);
	static $has_one = array(
		'ProjectImage' => 'Image'
	);
	 
	static $status = array(
		'WIP' 		=> 'Work in progress',
		'COMPLETED' => 'Completed'		
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Content.Main', new DropdownField('ProjectStatus', 'Status', self::$status), 'Content');
		
		$fields->addFieldToTab("Root.Content.Images", new ImageField('ProjectImage', 'Project Image', null, null, null, 'Projects'));
		
		return $fields;
	}
}
class ProjectPage_Controller extends Page_Controller {

}