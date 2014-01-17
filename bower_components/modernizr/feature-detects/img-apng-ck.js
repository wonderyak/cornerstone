// Animated PNG
// http://en.wikipedia.org/wiki/APNG
// By Addy Osmani
(function(){if(!Modernizr.canvas)return!1;var e=new Image,t=document.createElement("canvas"),n=t.getContext("2d");e.onload=function(){Modernizr.addTest("apng",function(){if(typeof t.getContext=="undefined")return!1;n.drawImage(e,0,0);return n.getImageData(0,0,1,1).data[3]===0})};e.src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACGFjVEwAAAABAAAAAcMq2TYAAAANSURBVAiZY2BgYPgPAAEEAQB9ssjfAAAAGmZjVEwAAAAAAAAAAQAAAAEAAAAAAAAAAAD6A+gBAbNU+2sAAAARZmRBVAAAAAEImWNgYGBgAAAABQAB6MzFdgAAAABJRU5ErkJggg=="})();