// Stylable scrollbars detection
Modernizr.addTest("cssscrollbar",function(){var e,t="#modernizr{overflow: scroll; width: 40px }#"+Modernizr._prefixes.join("scrollbar{width:0px} #modernizr::").split("#").slice(1).join("#")+"scrollbar{width:0px}";Modernizr.testStyles(t,function(t){e="scrollWidth"in t&&t.scrollWidth==40});return e});