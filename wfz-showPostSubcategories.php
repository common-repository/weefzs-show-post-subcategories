<?php
/*
Plugin Name: Weefz's 'Show Post Subcategories'
Plugin URI: http://oneserving.com/site-news/wordpress-plugin-show-post-subcategories/
Version: 0.3
Author: Debbie Timmins 
Author URI: http://www.theaveragegamer.com
Description: Displays and links to the post's subcategories of a given parent category. Takes parameters for before, after and separators in the list. Developed for oneserving.com

With thanks to Stephanie Booth | http://climbtothestars.org/
Parts of this came from v0.5 of her Bunny-tags plugin - http://dev.wp-plugins.org/wiki/BunnysTechnoratiTags

This is my first-ever plugin for anything ever. USE AT YOUR OWN RISK! ;)

What Does It Do?
You call the plugin with a template tag in the post loop, giving it a parent category, separators, prefix and suffix
It returns a string of the post's subcategories and links.

How To Use It:
1) Copy into your plugins directory
2) Activate it in the plugins screen
3) Add the following custom template tag to your template:

<?php wfzShowPostSubcategories('prefix','suffix','separator','parent category id number') ?>

Replace the parameters as appropriate.

That's it! Hope it helps.

-----
Copyright © Debbie Timmins 2007, 2008

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

// The TEMPLATE TAG

function wfzGetSubcategories($separator, $parentCat){ 
	$catlist;
		foreach((get_the_category()) as $category) { 
			$categoryLink=get_category_link($category->cat_ID);
			if ($category->category_parent==$parentCat) {
				$catList.="<a href=" . $categoryLink . ">" . $category->cat_name . "</a>" . $separator; 
			}
		}
	$chomp = 0 - strlen($separator);
	$catList=substr($catList, 0, $chomp); // remove the last separator
	return $catList;
}

function wfzShowPostSubcategories($before, $after, $separator, $parentCat){
	print($before . wfzGetSubcategories($separator, $parentCat) . $after);
}
?>