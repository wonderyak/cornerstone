// dataset API for data-* attributes
// test by @phiggins42
Modernizr.addTest("dataset",function(){var e=document.createElement("div");e.setAttribute("data-a-b","c");return!!e.dataset&&e.dataset.aB==="c"});