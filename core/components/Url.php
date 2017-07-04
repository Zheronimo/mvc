<?php


namespace core\components;


class Url
{
    /**
     * @param integer $n
     * @return string|null
     */
    static public function getRouteSegment($n) {
        //index.php?r=page/index
        $segment = self::getRouteSegments();
        if (!empty($segment[$n])){
            return $segment[$n];
        }
        return null;
    }

    /**
     * @return array
     */
    static public function getRouteSegments() {
        $url = $_GET['r'];
        $segments = explode('/', $url);
        if (empty($segments[0])) {
            return [];
        }
            $lastIndex = count($segments) - 1;
            if(empty($segments[$lastIndex])) {
                array_pop($segments);
            }
        return $segments;
    }

    /**
     * @param string $param
     * @return null
     */
    static public function  getParam($param) {
        return isset($_GET[$param]) ? $_GET[$param] : null;
    }
}