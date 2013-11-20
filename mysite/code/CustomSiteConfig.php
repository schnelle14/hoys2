<?php
  
class CustomSiteConfig extends DataObjectDecorator 
{
     
    function extraStatics() 
    {
        return array(
            'db' => array(
                'Company_Logo' => 'Image'
            )
        );
    }
  
    public function updateCMSFields(FieldSet &$fields) 
    {        
        $fields->addFieldToTab("Root.Main", new ImageField("Company_Logo", "Company Logo"));
    }
    
    public function GetCompanyLogo()
    {
        return $this->owner->Company_Logo;
    }   
     
}