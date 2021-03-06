<?php

$config = array(
	
	/**
	 * If true, files with the extension specified in 'page_extension' are viewed 
	 * as pages within Indexy.
	 */
	'enable_pages' => true,
	
	/**
	 * Paths that should be forbidden if accessed directly and hidden from listings.
	 * 
	 * Entries should be relative to the root_path.
	 * 
	 * Currently only affects directories, not files.
	 */
	'forbidden_paths' => array('/indexy'),
	
	/**
	 * Files with these extensions (no leading dot) will be hidden from listings.
	 */
	'hidden_file_extensions' => array('php'),
	
	/**
	 * Files with these names will be hidden from listings.
	 */
	'hidden_file_names' => array('.htaccess', 'robots.txt'),
	
	/**
	 * The file extension that denotes when something is a file that should be
	 * parsed as a page.
	 */
	 'page_extension' => 'markdown',
	
	/**
	 * The root Indexy client-side path.
	 * 
	 * If Indexy is on the root of your domain or subdomain, you can leave this as
	 * a single slash.
	 * 
	 * If Indexy is in a directory, you should update this path to reflect that.
	 * For example, if Indexy is at http://mydomain.com/directory, your root_path
	 * should be '/directory'.
	 */
	'root_path' => '/',
	
	/**
	 * The name of the folder your desired theme is located in inside of the
	 * indexy/themes directory.
	 */
	'theme' => 'default',
	
	/**
	 * The overall title of your Indexy instance. This can use any of the Mustache
	 * template tags available to themes.
	 */
	'title' => 'Files on {{host_path}}'
	
);