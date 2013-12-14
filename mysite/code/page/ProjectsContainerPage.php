<?php
class ProjectsContainerPage extends Page {
	protected $projectPages;
	
	static $allowed_children = array('ProjectPage');
	
	static $default_child = 'ProjectPage';

	static $db = array(
			
	);
	
	static $has_many = array(
	);
	

	
	public function getCMSFields() {
		$fields = parent::getCMSFields();  
		return $fields;
	}
	

	
	
}
class ProjectsContainerPage_Controller extends Page_Controller {
	
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