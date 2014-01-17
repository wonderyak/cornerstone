// https://github.com/Modernizr/Modernizr/issues/572
// Similar to http://jsfiddle.net/FWeinb/etnYC/
Modernizr.addTest("cssvhunit",function(){var e;Modernizr.testStyles("#modernizr { height: 50vh; }",function(t,n){var r=parseInt(window.innerHeight/2,10),i=parseInt((window.getComputedStyle?getComputedStyle(t,null):t.currentStyle).height,10);e=i==r});return e});