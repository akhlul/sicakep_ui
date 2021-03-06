<?php

/**
 * define route, harus menentukan ROUTER_PAGE_PATH terlebih dahulu
 */
function route(
    string $method,
    string $pattern,
    ...$args
) {
    if (
        $_SERVER['REQUEST_METHOD'] == strtoupper($method) 
        || "ALL" == strtoupper($method)
    ) {

        $presets = [
            ':blank' => '',
            ':all' => '(.*)',
            ':alpha' => '([a-zA-Z]+)',
            ':username' => '([a-zA-Z.-]+)',
            ':any' => '([^/]+)',
            ':num' => '(\d+|-\d+)',
        ];

        foreach ($presets as $shortcode => $regex) {
            $pattern = strtr($pattern, [$shortcode => $regex]);
        }
        $pattern = '~^' . $pattern . '/$~i';

        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        if (substr($uri, -1) != "/") {
            $uri = $uri . "/";
        }

        $route_eval = [];
        foreach ($args as $index => $arg) {
            if (gettype($arg) == "object") {
                $route_eval['closure'] = $arg;
            } else if (substr($arg, 0, 5) === "page#") {
                $route_eval['page'] = $arg;
            } else if (substr($arg, 0, 5) === "group#") {
                $route_eval['group'] = $arg;
            }
        }

        // if has prefix then modify the pattern
        if (isset($route_eval['group'])) {
            $pattern = substr($pattern, 0, -3) . "~i";
        }

        preg_match($pattern, $uri, $route_match);
        // print_r();
        // echo $uri . " parsed with ". $pattern ."<br>";
        // print_r($route_match);
        // echo "<br>";

        // if no match
        if (!$route_match) return;

        // if has closures then run ONLY the closure
        if (!empty($route_eval['closure'])) {
            $route_eval['closure']($route_match);
            die();
        }

        if (isset($route_eval['page'])) {
            $page = explode("#", $route_eval['page']);

            $page_php = "";
            foreach ($page as $idx => $pg) {
                if ($idx == 0) continue;
                $page_php = $page_php . "/" . $pg;
            }
            $page_php = $page_php . ".php";
            require_once "./src/bootstrap.php";
            require ROUTER_PAGE_PATH . $page_php;
            die();
        }
    }
}

/**
 * menuju ke url tertentu, harus menentukan BASE_URL terlebih dahulu
 */
function redirect(String $url)
{
    Header("Location: " . BASE_URL . $url);
}

/**
 * refresh halaman ini beberapa saat
 */
function refreshBrowser() 
{
    echo "<script>window.location.reload();</script>";
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