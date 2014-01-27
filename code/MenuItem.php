<?php

class MenuItem extends DataObject {
	
	public static $db = array(
		'MenuTitleOverride' => 'Varchar(50)',
		'SortOrder' 		=> 'Int'
	);
	
	public static $has_one = array(
		'Menu' => 'Menu',
		'Page' => 'Page'
	);
	
	public static $default_sort = 'SortOrder';
	
	public function getMenuTitle() {
		return $this->MenuTitleOverride ? $this->MenuTitleOverride : $this->Page()->Title;
	}
	
	public function getLink() {
		return $this->Page() ? $this->Page()->Link() : NULL;
	}
	
	public function getCMSFields() {
		
		return new FieldList( 
			new TextField('MenuTitleOverride', 'Title override'),
			new TreeDropdownField('PageID', 'Page', 'Page')
		);
		
	}
	
}
