<!-- DO NOT EDIT THIS FILE; it is auto-generated from readme.txt -->
# Topher's Form

Provides shortcodes to render a contact form and form submissoins.

**Contributors:** [topher1kenobe](http://profiles.wordpress.org/topher1kenobe)  
**Tags:** [](http://wordpress.org/plugins/tags/)  
**Requires at least:** 3.0  
**Tested up to:** 5.3.2  
**Stable tag:** 1.1  
**License:** [GPLv2 or later](http://www.gnu.org/licenses/gpl-2.0.html)  

## Description ##

Provides one shortcode that renders a contact form that submits via AJAX. Submissions are stored in a custom post type.

Also provides a shortcode to render submissions to only Administrators. The submissions appear in an HTML table, 10 at a time, with pagination.

## Installation ##

This section describes how to install the plugin and get it working.

1. Upload the `topher-form` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create new or Edit a Post.

## Usage ##

Form:
Create a standard page and insert the shortcode [topher-form].

Submissions:
Create a standard page and instert the shortcode [topher-form-entries].

## Changelog ##

### 1.1 ###
* Split CSS and JS files by page, so each only has functionality for the specific page they're loaded on
* Made CSS and JS files load only on the pages they're needed
* Cleaned up indenting on CSS files
* Added "required" element to required form fields
* Enforced default formating styles for form
* Added internationalization code in main file
* Added POT file for future translators
* Created Canadian English translation as example
* Limited viewing of single entries to administrators

### 1.0 ###
* Initial release.


