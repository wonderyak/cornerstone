// Browser support test for the HTML5 <ruby>, <rt> and <rp> elements
// http://www.whatwg.org/specs/web-apps/current-work/multipage/text-level-semantics.html#the-ruby-element
//
// by @alrra
Modernizr.addTest("ruby",function(){function o(e,t){var n;window.getComputedStyle?n=document.defaultView.getComputedStyle(e,null).getPropertyValue(t):e.currentStyle&&(n=e.currentStyle[t]);return n}function u(){r.removeChild(e);e=null;t=null;n=null}var e=document.createElement("ruby"),t=document.createElement("rt"),n=document.createElement("rp"),r=document.documentElement,i="display",s="fontSize";e.appendChild(n);e.appendChild(t);r.appendChild(e);if(o(n,i)=="none"||o(e,i)=="ruby"&&o(t,i)=="ruby-text"||o(n,s)=="6pt"&&o(t,s)=="6pt"){u();return!0}u();return!1});