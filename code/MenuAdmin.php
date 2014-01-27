<?php

class MenuAdmin extends ModelAdmin {
	
	public static $url_segment = 'menus';
    public static $menu_title = 'Menus';
    public static $menu_priority = 10;
    public static $managed_models = array('Menu');
	
	public $showImportForm = false;
	
}
