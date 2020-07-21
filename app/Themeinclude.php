<?php

namespace App;


class Themeinclude
{
	public function __get(string $block) {
		$theme_name = env("THEME_NAME");
		return "themes.$theme_name.inc.$block";
	}
}
