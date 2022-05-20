<?php

use duncan3dc\Sessions\Session;

require_once "./src/functions/tinyrouter.php";

/**
 * define constants
 * TODO: put all define into ./src/variables.php
 * 
 */ 
define('ROUTER_PAGE_PATH', __DIR__ . "/pages");
define('BASE_URL', $_SERVER['BASE_URL']);


/**
 * Systems
 * =========[Method] ============================[Urls] =======================[Page Name] 
 */
route('GET',        '/404-not-found',                   "page#404NotFound");
route('GET',        '/maintenance',                     "page#Maintenance");


/**
 * procedural middleware
 * if maintenance will always redirect to /maintenance
 */
if ($_SERVER['ENV'] == 'maintenance') {
    redirect('/maintenance');
    die();
}


/**
 * Authentication
 * =========[Method] ============================[Urls] =======================[Page Name] 
 */
route('GET',        '/login',                           "page#Auth#Login");
route('POST',       '/login',                           "page#Auth#UserLogin");
route('GET',        '/logout',                          "page#Auth#UserLogout");


/**
 * procedural middleware
 * if not login, will be redirect to /login
 */
Session::name('sicakep');
if ( !SESSION::get("username") ) {
    redirect('/login');
    die();
}

/**
 * =========[Method] ============================[Urls] =======================[Page Name] 
 */
route('GET',        '',                                 "page#Home");
route('GET',        '/home',                            "page#Home");

route('GET',        '/api/chart',                       "page#API#ChartData");

route('ALL',        '/dailyreport/:all',                "group#", function ($r) {
    route('GET',    '/dailyreport/entry',               "page#DailyReport#Entry");
    route('POST',   '/dailyreport/entry',               "page#DailyReport#Entry#Create");
    route('GET',    '/dailyreport/entry/:num',          "page#DailyReport#Entry#Edit");
    route('POST',   '/dailyreport/entry/:num',          "page#DailyReport#Entry#Update");
    route('GET',    '/dailyreport/entry/:num/delete',   "page#DailyReport#Entry#Remove");
    route('POST',   '/dailyreport/entry/:num/delete',   "page#DailyReport#Entry#Delete");

    route('GET',    '/dailyreport/collection',          "page#DailyReport#Collection");
    route('GET',    '/dailyreport/summary',             "page#DailyReport#Summary");
});


route('ALL',        '/attendance/:all',                 "group#", function ($r) {
    route('GET',    '/attendance/import',               "page#Attendance#ImportFromPBD");
    route('GET',    '/attendance/collection',           "page#Attendance#Collection");
    route('GET',    '/attendance/status',               "page#Attendance#StatusSummary");
});

route('ALL',        '/master/work/:all',                "group#", function ($r) {
    route('GET',    '/master/work/collection',          "page#Master#Work#Collection");
    route('GET',    '/master/work/propose',             "page#Master#Work#Propose");
    route('GET',    '/master/work/advanced',            "page#Master#Work#Advanced");
});

route('ALL',        '/master/employee',                 "page#Master#Employee#Collection");

route('ALL',        '/entry/:all',                      "group#", function ($r) {
    route('GET',    '/entry/target',                    "page#Entry#Target");
    route('POST',   '/entry/target',                    "page#Entry#Target#Create"); 
    route('GET',    '/entry/target/fetch/',             "page#Entry#Target#Fetch"); //HTMX

    route('GET',    '/entry/target/collective',         "page#Entry#TargetCollective");
    route('GET',    '/entry/report',                    "page#Entry#Report");
    route('GET',    '/entry/grade',                     "page#Entry#Grade");
});

route('ALL',        '/print/:all',                      "group#", function ($r) {
    route('GET',    '/print/CKP',                       "page#Print#CKP");
    route('GET',    '/print/SKP',                       "page#Print#SKP");
});

route('ALL',        '/monitor/:all',                    "group#", function ($r) {
    route('GET',    '/monitor/employee-progress',       "page#Monitor#EmployeeProgress");
    route('GET',    '/monitor/work-progress',           "page#Monitor#WorkProgress");
});

route('ALL',        '/matrices/:all',                   "group#", function ($r) {
    route('GET',    '/matrices/employee',               "page#Matrices#Flag");
    route('GET',    '/matrices/service',                "page#Matrices#Service");
    route('GET',    '/matrices/report',                 "page#Matrices#Report");
});

route('ALL',        '/master/matrices',                 "page#Master#Matrices#Collection");

route('ALL',        '/plugins/zoom',                    "page#Plugins#Zoom");

route('ALL',        '/configure',                       "page#Configuration");


/**
 * 404: Not Found
 * When url has no match with any defined URLs, it will fall down here (404: Not Found)
 */
// header("HTTP/1.0 404 Not Found");
// die('Error 404 - No route could be found');
redirect("/404-not-found");