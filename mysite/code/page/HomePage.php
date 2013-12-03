<?php
class HomePage extends Page {
	static $db = array(
			'Welcome_Msg' => 'Text',
			'RecentProj1' => 'Text',
			'RecentProj2' => 'Text'
	);
	static $has_one = array(
			'Home_HeroImage' => 'Image',
			'Logo_Image'     => 'Image',
			'SmallDefault_HeroImage' => 'Image'
	);
	 
	public function getProjects()
	{
		$filter = "ClassName IN('ProjectPage') ";
	
		$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
	
		if(count($pages) == 0) {
			return null;
		}
		//var_dump($pages->items[0]); exit;
		$this->projectPages = $pages;
		return $this->projectPages;
	}
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeByName('Small_HeroImage');
		 
		$fields->addFieldToTab('Root.Content.Main', new TextField('Welcome_Msg', 'Welcome Message'), 'Content');
		
		$fields->addFieldToTab("Root.Content.Images", new ImageField('Home_HeroImage', 'Hero Image (1600 x 420)', null, null, null, 'HeroImages'));
		$fields->addFieldToTab("Root.Content.Images", new ImageField('Logo_Image', 'Company Logo (200 x 100)'));
		$fields->addFieldToTab("Root.Content.Images", new ImageField('SmallDefault_HeroImage', 'Default Hero Image for other pages (1600 x 230)', null, null, null, 'HeroImages'));
		 
		$pages = $this->getProjects();
		
		$projects = array();
		
		foreach ($pages->items as $page) {
			$projects[$page->Title] = $page->Title;
		}
		
		
		$fields->addFieldToTab('Root.Content.Main', new DropdownField('RecentProj1', 'Recent Project 1', $projects), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new DropdownField('RecentProj2', 'Recent Project 2', $projects), 'Content');
		
		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
	public function getLogo(){
		return $this->Logo_Image;
	}
	
	public function getProject1(){
		$filter = "Title = '".$this->RecentProj1 . "'";
		$page = DataObject::get('SiteTree', $filter, "Status = 'Published'");
		return $page->items[0];
	}
	public function getProject2(){
		$filter = "Title = '".$this->RecentProj2 . "'";
		$page = DataObject::get('SiteTree', $filter, "Status = 'Published'");
		return $page->items[0];
	}
}