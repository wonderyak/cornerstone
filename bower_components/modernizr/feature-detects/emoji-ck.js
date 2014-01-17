// Requires a Modernizr build with `canvastext` included
// http://www.modernizr.com/download/#-canvas-canvastext
Modernizr.addTest("emoji",function(){if(!Modernizr.canvastext)return!1;var e=document.createElement("canvas"),t=e.getContext("2d");t.textBaseline="top";t.font="32px Arial";t.fillText("😃",0,0);return t.getImageData(16,16,1,1).data[0]!==0});