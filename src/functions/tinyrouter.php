<?php

function route (
    string $method,
    string $pattern,
    ...$args 
) 
{
    echo $_SERVER['REQUEST_METHOD'] . " " . $pattern . '</br>';
    if ($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {

        $presets = [
            ':all' => '.*',
            ':alpha' => '[a-zA-Z]+',
            ':any' => '[^/]+',
            ':num' => '\d+|-\d+',
        ];

        foreach ($presets as $shortcode => $regex) {
            $pattern = strtr($pattern, [$shortcode => '(' . $regex . ')']);
        }
        $pattern = '~^' . $pattern . '$~i';


        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        if (substr($uri, -1) != "/") {
            $uri = $uri . "/";
        }

        $route_eval = [];
        foreach ($args as $index => $arg) {
            if (gettype($arg) == "object") {
                $route_eval['closure'] = $arg;
            } else {
                $route_eval['page'] = substr($arg, 0, 5) === "page#" ?: $arg;
                $route_eval['group'] = substr($arg, 0, 5) === "group#" ?: $arg;
                // echo $index . gettype($arg) . "<br>";
            }
        }
        
        // if has prefix then modify the pattern
        if (isset($route_eval['group'])){
            $pattern = substr($pattern, 0, -3) . "~i";
        }

        preg_match($pattern, $uri, $matches);

        var_dump($route_eval);
        echo '</br>';
        print_r($matches);
        echo '</br></br>';
        
        // // if no match
        // if (!$matches) return;

        // // if has closures then run ONLY the closure
        // if (!empty($route_eval['closure'])) {
        //     $route_eval['closure']($matches);
        //     die();
        // }

        // if (!empty($route_eval['page'])) {
        //     print_r($route_eval['page']);
        //     // $page = explode("#", $route_eval['page'][0]);
        //     // print_r($page);
        //     // require $GLOBALS['ROUTER_PAGE_PATH'] . '/' . $page . ".php";
        //     die();
        // }

        // $output = $args[1]($matches);
        // if (isset($output)) {
        //     require $_GLOBALS['router_folder'] . '/' . $page . ".php";
        //     die();
        // }
    }
}


// $request_method
/**
 * TinyRouter is perhaps the smallest PHP router library on earth 
 * 
 * https://github.com/jenstornell/TinyRouter
 */
// class route
// {
//     public static function __callStatic(String $method, Array $args)
//     {
//         echo $_SERVER['REQUEST_METHOD'] . " " . $args[0] . '</br>';
//         if ($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {

//             $presets = [
//                 ':all' => '.*',
//                 ':alpha' => '[a-zA-Z]+',
//                 ':any' => '[^/]+',
//                 ':num' => '\d+|-\d+',
//             ];

//             $pattern = $args[0];

//             foreach ($presets as $shortcode => $regex) {
//                 $pattern = strtr($pattern, [$shortcode => '(' . $regex . ')']);
//             }
//             $pattern = '~^/' . $pattern . '$~i';
//             echo '<em>pattern: </em> ' . $pattern . '<br>';

//             $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//             if (substr($uri, -1) != "/") {
//                 $uri = $uri . "/";
//             }
//             echo '<em>uri: </em> ' . $uri . '<br>';

//             preg_match($pattern, $uri, $matches);
//             var_dump($matches);

//             if (!$matches) return;

//             $output = $args[1]($matches);
//             if (isset($output)){
//                 // die($output);
//             }
//         }
//     }
// }


// function route(String $pattern, $method)
// {
//     route::get($pattern, $method);
// }