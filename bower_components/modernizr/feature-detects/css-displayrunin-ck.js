// by alanhogan
// https://github.com/Modernizr/Modernizr/issues/198
// http://css-tricks.com/596-run-in/
Modernizr.testStyles(" #modernizr { display: run-in; } ",function(e,t){var n=window.getComputedStyle?getComputedStyle(e,null).getPropertyValue("display"):e.currentStyle.display;Modernizr.addTest("display-runin",n=="run-in")});