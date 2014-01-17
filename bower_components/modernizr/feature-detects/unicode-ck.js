/**
 * Unicode special character support
 * 
 * Detection is made by testing missing glyph box rendering against star character
 * If widths are the same, this "probably" means the browser didn't support the star character and rendered a glyph box instead
 * Just need to ensure the font characters have different widths
 * 
 * Warning : positive Unicode support doesn't mean you can use it inside <title>, this seams more related to OS & Language packs
 */Modernizr.addTest("unicode",function(){var e,t=document.createElement("span"),n=document.createElement("span");Modernizr.testStyles("#modernizr{font-family:Arial,sans;font-size:300em;}",function(r){t.innerHTML="&#5987";n.innerHTML="&#9734";r.appendChild(t);r.appendChild(n);e="offsetWidth"in t&&t.offsetWidth!==n.offsetWidth});return e});