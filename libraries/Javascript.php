<?php

namespace Sophia;

class Javascript
{
    public static $scripts = [];
    public static function list($name, $href, $ext = false)
    {
        self::$scripts[$name] = $ext ? $href : ROOT . $href;
    }
    public static function get($name)
    {
        return self::$scripts[$name];
    }
    public static function print($name)
    {
        return '<script src="' . self::get($name) . '"></script>';
    }
    public static function page($data)
    {
        if (isset($data["script"])) {
            $scripts = [];
            $data["script"] = array_unique($data["script"]);
            echo '<!-- INCLUDED SCRIPTS -->';
            if (isset($data["script"])) {
                foreach ($data["script"] as $script) {

                    $scripts[] = self::get($script);
                }
            }
            $file = "assets/theme/js/" . $data["view"] . ".js";
            if (file_exists($file)) {
                $scripts[] = ROOT . $file;
            }
            if (isset($data["page"])) {
                $file = "assets/theme/js/" . $data["view"] . "/" . $data["page"] . ".js";
                if (file_exists($file)) {
                    $scripts[] = ROOT . $file;
                }
            }

            $scripts = array_unique($scripts);
            foreach ($scripts as $script) {

                if (strpos($script, 'https://') !== false || strpos($script, 'http://') !== false) {
                    $check = false;
                } else {
                    $check = filemtime(substr($script, 1));
                }
                $v = $check != false ? '?v=' . $check : '';
                echo  '<script src="' . $script . $v . '"></script>' . PHP_EOL;
            }
            echo '<!-- END INCLUDED SCRIPTS -->';
        }
    }
}
