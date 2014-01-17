// Grab the WebGL extensions currently supported and add to the Modernizr.webgl object
// spec: www.khronos.org/registry/webgl/specs/latest/#5.13.14
// based on code from ilmari heikkinen
// code.google.com/p/graphics-detect/source/browse/js/detect.js
(function(){if(!Modernizr.webgl)return;var e,t,n;try{e=document.createElement("canvas");t=e.getContext("webgl")||e.getContext("experimental-webgl");n=t.getSupportedExtensions()}catch(r){return}t===undefined?Modernizr.webgl=new Boolean(!1):Modernizr.webgl=new Boolean(!0);for(var i=-1,s=n.length;++i<s;)Modernizr.webgl[n[i]]=!0;window.TEST&&TEST.audvid&&TEST.audvid.push("webgl");e=undefined})();