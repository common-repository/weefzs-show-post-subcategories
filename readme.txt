Displays and links to the post's child categories of a given parent category. Takes parameters for before, after and separators in the list. Developed for oneserving.com

With thanks to Stephanie Booth | http://climbtothestars.org/
Parts of this came from v0.5 of her Bunny-tags plugin - http://dev.wp-plugins.org/wiki/BunnysTechnoratiTags

This is my first-ever plugin for anything so please try it in a test environment beforehand.

How To Use It:
1) Copy into your plugins directory
2) Activate it in the plugins screen
3) Add the following custom template tag to your template:

<?php wfzShowPostSubcategories('prefix','suffix','separator','parent category id number') ?>

Replace the parameters as appropriate, preserving the single quotes.

Hope this helps someone.