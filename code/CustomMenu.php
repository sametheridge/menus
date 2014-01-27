<?php

class CustomMenu extends Extension {
	
	public function CustomMenu($slug = NULL) {
		
		if ($slug != NULL) {
			
			if ($Menu = Menu::get()->filter('Slug', $slug)->First()) {
				return $Menu->MenuItems();	
			} else {
				return NULL;
			}
			
		}
		
	}
	
}
