<?php

namespace App\Logic;

class CommonLogic {
    public static function ArrayFilter($inputs, $keys) {
        $params = [];
        foreach ($keys as $key) {
            $params[$key] = isset($inputs[$key]) ? $inputs[$key] : null;
        }
        return $params;
    }
}
