<?php

require_once "./src/functions/tinyrouter.php";

$GLOBALS['ROUTER_PAGE_PATH'] = __DIR__ . "/pages";

route('GET', '/home', "page#Home");

route('GET', '/login/:all', "group#", function ($r) {
    route('GET', '/login', "page#Login");
    // route('GET', '/login/:any/edit', "page#Edit");
    // echo 'not found';
});


route('GET', '/dailyreport/:all', "group#", function ($r) {
    route('GET', '/dailyreport/entry', "page#DailyReport#Entry");
    route('GET', '/dailyreport/collection', "page#DailyReport#Collection");
    route('GET', '/dailyreport/summary', "page#DailyReport#Summary");
});


route('GET', '/attendance/:all', "group#", function ($r) {
    route('GET', '/attendance/import', "page#Attendance#ImportFromPBD");
    route('GET', '/attendance/collection', "page#Attendance#Collection");
    route('GET', '/attendance/status', "page#Attendance#StatusSummary");
});


route('GET', '/attendance/:all', "group#", function ($r) {
    route('GET', '/attendance/import', "page#Attendance#ImportFromPBD");
    route('GET', '/attendance/collection', "page#Attendance#Collection");
    route('GET', '/attendance/status', "page#Attendance#StatusSummary");
});


route('GET', '/master/work/:all', "group#", function ($r) {
    route('GET', '/master/work/collection', "page#Master#Work#Collection");
    route('GET', '/master/work/propose', "page#Master#Work#Propose");
    route('GET', '/master/work/advanced', "page#Master#Work#Advanced");
});

route('GET', '/master/employee', "page#Master#Employee#Collection");

route('GET', '/entry/:all', "group#", function ($r) {
    route('GET', '/entry/target', "page#Entry#Target");
    route('GET', '/entry/target/collective', "page#Entry#TargetCollective");
    route('GET', '/entry/report', "page#Entry#Report");
    route('GET', '/entry/grade', "page#Entry#Grade");
});

route('GET', '/print/:all', "group#", function ($r) {
    route('GET', '/print/CKP', "page#Print#CKP");
    route('GET', '/print/SKP', "page#Print#SKP");
});

route('GET', '/monitor/:all', "group#", function ($r) {
    route('GET', '/monitor/employee-progress', "page#Monitor#EmployeeProgress");
    route('GET', '/monitor/work-progress', "page#Monitor#WorkProgress");
});

route('GET', '/matrices/:all', "group#", function ($r) {
    route('GET', '/matrices/employee', "page#Matrices#Flag");
    route('GET', '/matrices/service', "page#Matrices#Service");
    route('GET', '/matrices/report', "page#Matrices#Report");
});

route('GET', '/master/matrices', "page#Master#Matrices#Collection");

route('GET', '/plugins/zoom', "page#Plugins#Zoom");

route('GET', '/configure', "page#Configuration");

// // When no match is found it will fall down here
header("HTTP/1.0 404 Not Found");
die('Error 404 - No route could be found');