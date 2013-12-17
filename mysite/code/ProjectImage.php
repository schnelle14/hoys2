<?php
class ProjectImage extends DataObject {

	static $db = array(
			'ImageDesc' => 'Text',
	);

	static $has_one = array(
			'Image'         => 'Image',
			'MyProjectPage' => 'ProjectPage'
	);
	static $summary_fields = array(
			'Thumbnail' => 'The Image'
	);
	function getCMSFields_forPopup() {
		$fields = new FieldSet();
		$projectFolderName=str_replace(" ", "_", $this->getComponent("MyProjectPage")->Title);
		$projectFolderName = 'Projects/' . $projectFolderName . '/Gallery/';
		 
		$fields->push( new ImageField('Image', 'Project Image', null, null, null, $projectFolderName));
		$fields->push( new TextField( 'ImageDesc', 'Image Description' ) );
		 
		return $fields;
	}
	

	function getThumbnail()
	{
		if ($Image = $this->Image())
		{
			return $Image->CMSThumbnail();
		}
		else
		{
			return '(No Image)';
		}
	}

}