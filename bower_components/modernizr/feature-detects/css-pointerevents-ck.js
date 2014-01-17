// developer.mozilla.org/en/CSS/pointer-events
// Test and project pages:
// ausi.github.com/Feature-detection-technique-for-pointer-events/
// github.com/ausi/Feature-detection-technique-for-pointer-events/wiki
// github.com/Modernizr/Modernizr/issues/80
Modernizr.addTest("pointerevents",function(){var e=document.createElement("x"),t=document.documentElement,n=window.getComputedStyle,r;if("pointerEvents"in e.style){e.style.pointerEvents="auto";e.style.pointerEvents="x";t.appendChild(e);r=n&&n(e,"").pointerEvents==="auto";t.removeChild(e);return!!r}return!1});