<?php

// require_once "./src/variables.php";
require_once "./src/functions/tinyrouter.php";
// require_once "./src/functions/session.php";
// require_once "./src/functions/session.php";

// TODO: put all define into ./src/variables.php
define('ROUTER_PAGE_PATH', __DIR__ . "/pages");
define('BASE_URL', 'http://127.0.0.1:7777');


route('GET',  '/login',     "page#Auth#Login");
route('POST', '/login',     "page#Auth#UserLogin");
route('GET',  '/logout',    "page#Auth#UserLogout");

route('GET', '',        "page#Home");
route('GET', '/home',   "page#Home");

route('GET', '/api/chart', "page#API#ChartData");

route('ALL', '/dailyreport/:all', "group#", function ($r) {
    route('GET',  '/dailyreport/entry',             "page#DailyReport#Entry");
    route('POST', '/dailyreport/entry',            "page#DailyReport#Entry#Create");
    route('GET',  '/dailyreport/entry/:num',        "page#DailyReport#Entry#Edit");
    route('POST', '/dailyreport/entry/:num',        "page#DailyReport#Entry#Update");
    route('GET',  '/dailyreport/entry/:num/delete', "page#DailyReport#Entry#Remove");
    route('POST', '/dailyreport/entry/:num/delete', "page#DailyReport#Entry#Delete");

    route('GET', '/dailyreport/collection', "page#DailyReport#Collection");
    route('GET', '/dailyreport/summary', "page#DailyReport#Summary");
});


route('ALL', '/attendance/:all', "group#", function ($r) {
    route('GET', '/attendance/import', "page#Attendance#ImportFromPBD");
    route('GET', '/attendance/collection', "page#Attendance#Collection");
    route('GET', '/attendance/status', "page#Attendance#StatusSummary");
});


route('ALL', '/attendance/:all', "group#", function ($r) {
    route('GET', '/attendance/import', "page#Attendance#ImportFromPBD");
    route('GET', '/attendance/collection', "page#Attendance#Collection");
    route('GET', '/attendance/status', "page#Attendance#StatusSummary");
});


route('ALL', '/master/work/:all', "group#", function ($r) {
    route('GET', '/master/work/collection', "page#Master#Work#Collection");
    route('GET', '/master/work/propose', "page#Master#Work#Propose");
    route('GET', '/master/work/advanced', "page#Master#Work#Advanced");
});

route('ALL', '/master/employee', "page#Master#Employee#Collection");

route('ALL', '/entry/:all', "group#", function ($r) {
    route('GET', '/entry/target', "page#Entry#Target");
    route('GET', '/entry/target/collective', "page#Entry#TargetCollective");
    route('GET', '/entry/report', "page#Entry#Report");
    route('GET', '/entry/grade', "page#Entry#Grade");
});

route('ALL', '/print/:all', "group#", function ($r) {
    route('GET', '/print/CKP', "page#Print#CKP");
    route('GET', '/print/SKP', "page#Print#SKP");
});

route('ALL', '/monitor/:all', "group#", function ($r) {
    route('GET', '/monitor/employee-progress', "page#Monitor#EmployeeProgress");
    route('GET', '/monitor/work-progress', "page#Monitor#WorkProgress");
});

route('ALL', '/matrices/:all', "group#", function ($r) {
    route('GET', '/matrices/employee', "page#Matrices#Flag");
    route('GET', '/matrices/service', "page#Matrices#Service");
    route('GET', '/matrices/report', "page#Matrices#Report");
});

route('ALL', '/master/matrices', "page#Master#Matrices#Collection");

route('ALL', '/plugins/zoom', "page#Plugins#Zoom");

route('ALL', '/configure', "page#Configuration");

// // When no match is found it will fall down here
header("HTTP/1.0 404 Not Found");
die('Error 404 - No route could be found');