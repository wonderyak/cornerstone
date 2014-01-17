// data uri test.
// https://github.com/Modernizr/Modernizr/issues/14
// This test is asynchronous. Watch out.
// in IE7 in HTTPS this can cause a Mixed Content security popup. 
//  github.com/Modernizr/Modernizr/issues/362
// To avoid that you can create a new iframe and inject this.. perhaps..
(function(){var e=new Image;e.onerror=function(){Modernizr.addTest("datauri",function(){return!1})};e.onload=function(){Modernizr.addTest("datauri",function(){return e.width==1&&e.height==1})};e.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="})();