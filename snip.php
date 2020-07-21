<?php
function theme() {
    return "default";
}
class THEMEBLOCK {
    public static $navbar = ".navbar";
}

class THEME {
    public $theme = 'default';
    // public $folder = 'blocks';
    public function __get(string $file)
    {
        return "$this->theme.$file";
    }
}

echo THEMEBLOCK::$navbar;
// $THEME = new THEME;
// echo $THEME->navbar.PHP_EOL;
// echo $THEME->sliders.PHP_EOL;