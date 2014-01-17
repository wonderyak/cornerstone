// display: table and table-cell test. (both are tested under one name "table-cell" )
// By @scottjehl
// all additional table display values are here: http://pastebin.com/Gk9PeVaQ though Scott has seen some IE false positives with that sort of weak detection.
// more testing neccessary perhaps.
Modernizr.addTest("display-table",function(){var e=window.document,t=e.documentElement,n=e.createElement("div"),r=e.createElement("div"),i=e.createElement("div"),s;n.style.cssText="display: table";r.style.cssText=i.style.cssText="display: table-cell; padding: 10px";n.appendChild(r);n.appendChild(i);t.insertBefore(n,t.firstChild);s=r.offsetLeft<i.offsetLeft;t.removeChild(n);return s});