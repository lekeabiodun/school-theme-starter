<?php

namespace App;

class Themeblock
{
	public function __get(string $block) {
		$theme_name = env("THEME_NAME");
		return "themes.$theme_name.blocks.$block";
	}
}
