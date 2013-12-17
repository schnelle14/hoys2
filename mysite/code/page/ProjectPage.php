<?php
class ProjectPage extends Page {
	
	static $allowed_children = "none";
	
	static $db = array(
		'ProjectStatus' => 'Text'
	);
	static $has_one = array(
		'ProjectImage' => 'Image',
		'PdfDocument' => 'File'
	); 
	static $has_many = array(
			'ProjectImages'    => 'ProjectImage'
	);
	
	static $status = array(
		'WIP' 		=> 'Work in progress',
		'COMPLETED' => 'Completed'		
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$projectFolderName=str_replace(" ", "_", $this->Title);
		$projectFolderName = 'Projects/' . $projectFolderName . '/';
		
		// status
		$fields->addFieldToTab('Root.Content.Main', new DropdownField('ProjectStatus', 'Status', self::$status), 'Content');
		
		// pdf file
		$pdfDocField = new FileIFrameField('PdfDocument', 'PDF Document');
		$pdfDocField->setFolderName($projectFolderName);
		$fields->addFieldToTab('Root.Content.Main', $pdfDocField, 'Content');
		
		// main image
		$fields->addFieldToTab("Root.Content.Images", new ImageField('ProjectImage', 'Main Project Image (630 x 420)', null, null, null, $projectFolderName));
		
		// gallery images
		$imagesTablefield = new ComplexTableField(
				$this,
				'ProjectImages',
				'ProjectImage',
				array(
						'Thumbnail'       => 'Image',
						'ImageDesc'       => 'Image Description',
				),
				'getCMSFields_forPopup',
				"`MyProjectPageID` = '$this->ID'"
		);
		$fields->addFieldToTab('Root.Content.Images', $imagesTablefield);
		
		return $fields;
	}
	
	public function getMoreProjects() {
		$filter = "ClassName IN('ProjectPage') ";
	
		$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
		if(count($pages) == 0) {
			return null;
		}
	
		$moreProjects = new DataObjectSet();
		$index = count($pages)-1;
		for ($x=0; $x <= $index; $x++){
			if ($pages->items[$x]->Title == $this->Title){
				$project1 = new DataObject;
				$project2 = new DataObject;
				// end of file
				if ($x == $index){
					if ($index > 1){
						$project1->page = $pages->items[$x-2];
						$moreProjects->push($project1);
					}
					if ($index > 0){
						$project2->page = $pages->items[$x-1];
						$moreProjects->push($project2);
					}
				} 
				// beg of file
				elseif ($x == 0){
					if ($index > 0){
						$project1->page = $pages->items[$x+1];
						$moreProjects->push($project1);
					}
					if ($index > 1){
						$project2->page = $pages->items[$x+2];
						$moreProjects->push($project2);
					}
				} 
				else {
					if ($x > 0){
						$project1->page = $pages->items[$x-1];
						$moreProjects->push($project1);
					}
					if ($x < $index){
						$project2->page = $pages->items[$x+1];
						$moreProjects->push($project2);
					}
				}
			} 
		}
		return $moreProjects;
	}
}

class ProjectPage_Controller extends Page_Controller {
	
	
	public function getProjectImages(){
		$images = DataObject::get("ProjectImage", "\"MyProjectPageID\"=" . $this->ID);
		return $images;
	}
	
	public function pdfExists(){
		if ($this->PdfDocumentID > 0){
			return true;
		}
		return false;
	}
}