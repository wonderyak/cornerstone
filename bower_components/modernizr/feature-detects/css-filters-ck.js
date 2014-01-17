// https://github.com/Modernizr/Modernizr/issues/615
// documentMode is needed for false positives in oldIE, please see issue above
Modernizr.addTest("cssfilters",function(){var e=document.createElement("div");e.style.cssText=Modernizr._prefixes.join("filter:blur(2px); ");return!!e.style.length&&(document.documentMode===undefined||document.documentMode>9)});