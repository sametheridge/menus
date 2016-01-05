<?php

class CustomMenu extends Extension {
	
	public function CustomMenu($slug = NULL) {
		
		if ($slug != NULL) {
			
			if ($menu = $this->getMenu($slug)) {
				return $menu->MenuItems();	
			} else {
				return NULL;
			}
			
		}
		
	}

	public function CustomMenuTitle($slug = NULL) {

		if ($slug != NULL) {
			if ($menu = $this->getMenu($slug)) {
				return $menu->Name;
			} else {
				return NULL;
			}
		}
	}

	private function getMenu($slug) {
		return Menu::get()->filter('Slug', $slug)->First();
	}
	
}
