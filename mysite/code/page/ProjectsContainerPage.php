<?php
class ProjectsContainerPage extends Page {
	protected $projectPages;
	
	static $allowed_children = array('ProjectPage');
	
	static $default_child = 'ProjectPage';
			
	static $has_many = array(
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();  
		return $fields;
	}
	

	
	
}
class ProjectsContainerPage_Controller extends Page_Controller {
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
	
	public function getCompletedProjects()
	{
		$filter = "ClassName IN('ProjectPage') ";
	
		$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
		
		if(count($pages) == 0) {
			return null;
		}
		
		$completedProjects = new DataObjectSet();
		
		foreach ($pages->items as $page) {
			
			if ($page->ProjectStatus == "COMPLETED"){
				$completedProject = new DataObject;
				$completedProject->page = $page;
				$completedProjects->push($completedProject);
			}
		}
		//var_dump($completedProjects->items[0]); exit;
		return $completedProjects;
	}
	
	public function getCurrentProjects()
	{
		$filter = "ClassName IN('ProjectPage') ";
	
		$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
	
		if(count($pages) == 0) {
			return null;
		}
	
		$currentProjects = new DataObjectSet();
	
		foreach ($pages->items as $page) {
				
			if ($page->ProjectStatus == "WIP"){
				$currentProject = new DataObject;
				$currentProject->page = $page;
				$currentProjects->push($currentProject);
			}
		}
		
		return $currentProjects;
	}
}