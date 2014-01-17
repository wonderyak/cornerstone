// code.google.com/speed/webp/
// by rich bradshaw, ryan seddon, and paul irish
// This test is asynchronous. Watch out.
(function(){var e=new Image;e.onerror=function(){Modernizr.addTest("webp",!1)};e.onload=function(){Modernizr.addTest("webp",function(){return e.width==1})};e.src="data:image/webp;base64,UklGRiwAAABXRUJQVlA4ICAAAAAUAgCdASoBAAEAL/3+/3+CAB/AAAFzrNsAAP5QAAAAAA=="})();