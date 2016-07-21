<?php

    namespace Qntm\LaravelMaterializeSass;

    class MaterializeSassBuilder {

        private static $file_js      = '/materialize/js/materialize.js';
        private static $file_js_min  = '/materialize/js/materialize.min.js';
        private static $file_jquery  = 'jquery-2.1.1.min.js';


        public static function includeMaterialize($min = true) {
            $return = self::tag_js('//code.jquery.com/'.self::$file_jquery);
            $return .= self::include_js($min);
            return $return;
        }

        public static function include_js($min) {
            if ($min) {
                return self::tag_js(asset(self::$file_js_min));
            }
            return self::tag_js(asset(self::$file_js));
        }

        private static function tag_js($path, $async = false) {
            if ($async) {
                return '<script src="'.$path.'" async></script>';
            }
            return '<script src="'.$path.'"></script>';
        }

    }

?>