openaccessphl
=============

new repo for the OpenAccessPHL site - trying to do it right with a local development site

Components for local development site:
--------------------------------------

* Wordpress installation and servers (L/M/W AMP)
* PHP configuration: database openacc3_wpadmin
* wp-config setup: database name, database username, database password
* set URL of local site in:
	* database table wp_options.siteurl = 'http://localhost:8888/[directory]'
	* database table wp_options.home = 'http://localhost:8888/[directory]'
	* file .htaccess.predirectoryindex - set local directory

NOTE: home page renders but links cause an error

SASS files
-----------

stylesheets are created with SASS and live in the child theme:

> wp-content/themes/bootstrap-ultimate-child/sass
