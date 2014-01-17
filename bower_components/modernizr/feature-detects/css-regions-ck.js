// CSS Regions
// http://www.w3.org/TR/css3-regions/
// By: Mihai Balan
// We start with a CSS parser test then we check page geometry to see if it's affected by regions
// Later we might be able to retire the second part, as WebKit builds with the false positives die out
Modernizr.addTest("regions",function(){var e=Modernizr.prefixed("flowFrom"),t=Modernizr.prefixed("flowInto");if(!e||!t)return!1;var n=document.createElement("div"),r=document.createElement("div"),i=document.createElement("div"),s="modernizr_flow_for_regions_check";r.innerText="M";n.style.cssText="top: 150px; left: 150px; padding: 0px;";i.style.cssText="width: 50px; height: 50px; padding: 42px;";i.style[e]=s;n.appendChild(r);n.appendChild(i);document.documentElement.appendChild(n);var o,u,a=r.getBoundingClientRect();r.style[t]=s;o=r.getBoundingClientRect();u=o.left-a.left;document.documentElement.removeChild(n);r=i=n=undefined;return u==42});