<?php

namespace Sophia;

class Stylesheet
{
    public static $styles = [];
    public static function list($name, $href, $ext = false)
    {
        self::$styles[$name] = $ext ? $href : ROOT . $href;
    }
    public static function get($name)
    {
        return self::$styles[$name];
    }
    public static function print($name)
    {
        echo '<link rel="stylesheet" href="' . self::get($name) . '">';
    }
    public static function page($data)
    {
        if (isset($data["style"])) {
            $styles = [];
            $data["style"] = array_unique($data["style"]);
            echo   '<!-- INCLUDED STYLES -->';
            if (isset($data["style"])) {
                foreach ($data["style"] as $style) {
                    $styles[] = self::get($style);
                }
            }
            $file = "assets/theme/css/" . $data["view"] . ".css";
            if (file_exists($file)) {
                $styles[] = ROOT . $file;
            }
            if (isset($data["page"])) {
                $file = "assets/theme/css/" . $data["view"] . "/" . $data["page"] . ".css";
                if (file_exists($file)) {
                    $styles[] = ROOT . $file;
                }
            }
            $styles = array_unique($styles);
            foreach ($styles as $style) {
                if (strpos($style, 'https://') !== false || strpos($style, 'http://') !== false) {
                    $check = false;
                }else{
                    $check = filemtime(substr($style, 1));
                }
                $v = $check != false ? '?v=' . $check : '';
                echo  '<link rel="stylesheet" href="' . $style . $v . '">';
            }
            echo   '<!-- END INCLUDED STYLES -->';
        }
    }
}
