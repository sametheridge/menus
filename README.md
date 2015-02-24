#Custom menus module for Silverstripe

This module adds a Menus section to the SilverStripe admin panel that you can use to create any number of custom menus to use within your templates.

Menu items are links to pages, selected via a tree dropdown. By default, each item uses the page’s title as its `MenuTitle` but this can be overriden in the CMS.

##Installation

`composer require plumpss/menus`

Remember to rebuild your database with `/dev/build?flush=all`

##Usage

Each menu needs a slug (ID) that can then be used from the template. E.g. for a slug of 'footer':

```
<% if CustomMenu(footer) %>
	<ul>
		<% loop CustomMenu(footer) %>
			<li><a href="$Link">$MenuTitle</a></li>
		<% end_loop %>
	</ul>
<% end_if %>
```