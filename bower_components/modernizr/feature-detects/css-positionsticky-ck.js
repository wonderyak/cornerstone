// Sticky positioning - constrains an element to be positioned inside the
// intersection of its container box, and the viewport.
Modernizr.addTest("csspositionsticky",function(){var e="position:",t="sticky",n=document.createElement("modernizr"),r=n.style;r.cssText=e+Modernizr._prefixes.join(t+";"+e).slice(0,-e.length);return r.position.indexOf(t)!==-1});