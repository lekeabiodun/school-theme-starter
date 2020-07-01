<?php


if(!function_exists('theme_layout')){
	function theme_layout($theme_name, $layout='layout') {
		return "themes.$theme_name.$layout";
	}
}

if(!function_exists('theme_path')){
	function theme_path($content=''){
		$content = str_replace('/', DIRECTORY_SEPARATOR, $content);
		if(Str::startsWith($content, DIRECTORY_SEPARATOR)){
			return resource_path('views'.DIRECTORY_SEPARATOR.'themes'.$content);
		} else {
			return resource_path('views'.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.$content);
		}
	}
}

if(!function_exists('theme_asset')){
	function theme_asset($content=''){
		return asset('resources/views/themes/'.$content);
	}
}

if(!function_exists('theme_include')){
	function theme_include($theme_name, $file) {
        return view("themes.$theme_name.inc.$file");
	}
}

if(!function_exists('theme_include')){
	function theme_block($theme_name, $block) {
        return view("themes.$theme_name.blocks.$block");
	}
}

if(!function_exists('get_site')){
	function get_site($option) {
		return $option;
	}
}

