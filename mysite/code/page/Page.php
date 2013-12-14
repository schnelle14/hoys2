<?php
class Page extends SiteTree {
	protected $homePage;
	
	public static $db = array(
	);

	public static $has_one = array(
			'Small_HeroImage' => 'Image'
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab("Root.Content.Images", new ImageField('Small_HeroImage', 'Hero Image (1600 x 230)'));
			
		return $fields;
	}
	
	public function HomePageObject()
	{	
			$filter = "ClassName IN('HomePage') ";
	
			$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
	
			if(count($pages) == 0) {
				return null;
			}
	
			$this->homePage = $pages->First();
		return $this->homePage;
	}
	
	public function ContactUsPageObject()
	{
		$filter = "ClassName IN('ContactUsPage') ";
	
		$pages = DataObject::get('SiteTree', $filter, "Status = 'Published'");
	
		if(count($pages) == 0) {
			return null;
		}
	
		$this->contactUsPage = $pages->First();
		return $this->contactUsPage;
	}
}

class Page_Controller extends ContentController {
	
	/**
	 * css classes of the page's body tag
	 *
	 */
	protected $body_css_classes = array();
	
	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// add css classes for the body
		$this->addBodyCssClass('PageType_' . $this->data()->getField('ClassName'));
		
		// Note: you should use SS template require tags inside your templates 
		// instead of putting Requirements calls here.  However these are 
		// included so that our older themes still work
		Requirements::themedCSS('layout'); 
		
		if($this->dataRecord->hasExtension('Translatable')) {
			i18n::set_locale($this->dataRecord->Locale);
		}
	}
	
	/**
	 * Add a css class for the body tag
	 *
	 * @param $body_css_class String
	 */
	public function addBodyCssClass($body_css_class)
	{
		if(!in_array($body_css_class, $this->body_css_classes)) {
			$this->body_css_classes[] = $body_css_class;
		}
	}
	
	/**
	 * Get the css classes of the page's body tag
	 */
	public function BodyCssClass()
	{
		return implode(' ', $this->body_css_classes);
	}
	
	public function isHomePage(){
		if ($this->BodyCssClass() == "PageType_HomePage"){
			return true;
		}
		return false;
	}
	
	public function heroImageExists(){
		if ($this->Small_HeroImageID > 0){
			return true;
		}
		return false;
	}
	
	public function getLocale(){
		return $this->dataRecord->Locale;
	}
	
	public function isEnglish(){
		
		if ($this->dataRecord->Locale == "en_NZ"){
			return true;
		}
		return false;
	}
	
	public function isChinese(){
		if ($this->dataRecord->Locale == "zh_cmn"){
			return true;
		}
		return false;
	}
	
	
	
	
	
	
	
	
}