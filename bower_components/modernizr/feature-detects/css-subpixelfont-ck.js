/*
 * Test for SubPixel Font Rendering
 * (to infer if GDI or DirectWrite is used on Windows)
 * Authors: @derSchepp, @gerritvanaaken, @rodneyrehm, @yatil, @ryanseddon
 * Web: https://github.com/gerritvanaaken/subpixeldetect
 */Modernizr.addTest("subpixelfont",function(){var e,t="#modernizr{position: absolute; top: -10em; visibility:hidden; font: normal 10px arial;}#subpixel{float: left; font-size: 33.3333%;}";Modernizr.testStyles(t,function(t){var n=t.firstChild;n.innerHTML="This is a text written in Arial";e=window.getComputedStyle?window.getComputedStyle(n,null).getPropertyValue("width")!=="44px":!1},1,["subpixel"]);return e});