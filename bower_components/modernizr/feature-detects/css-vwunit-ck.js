// https://github.com/Modernizr/Modernizr/issues/572
// http://jsfiddle.net/FWeinb/etnYC/
Modernizr.addTest("cssvwunit",function(){var e;Modernizr.testStyles("#modernizr { width: 50vw; }",function(t,n){var r=parseInt(window.innerWidth/2,10),i=parseInt((window.getComputedStyle?getComputedStyle(t,null):t.currentStyle).width,10);e=i==r});return e});