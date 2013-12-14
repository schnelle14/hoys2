<?php
class StaffAbout extends DataObject {

	static $db = array(
			'Name_en'		=> 'Text',
			'Name_zh'		=> 'Text',
			'Position_en'  => 'Text',
			'Position_zh'  => 'Text',
			'Description_en' => 'HTMLText',
			'Description_zh' => 'HTMLText'
	);

	static $has_one = array(
			'Photo'         => 'Image',
			'MyAboutUsPage' => 'AboutUsPage'
	);
	
	function getCMSFields_forPopup() {
		$fields = new FieldSet();
		 
		$fields->push( new ImageField('Photo', 'Photo', null, null, null, 'Staff'));
		$fields->push( new TextField( 'Name_en', 'Name_en' ) );
		$fields->push( new TextField( 'Name_zh', 'Name_chinese' ) );
		$fields->push( new TextField( 'Position_en', 'Position_en' ) );
		$fields->push( new TextField( 'Position_zh', 'Position_chinese' ) );
		$fields->push( new HtmlEditorField( 'Description_en', 'Description_en' ) );
		$fields->push( new HtmlEditorField( 'Description_zh', 'Description_chinese' ) );
		 
		return $fields;
	}

}