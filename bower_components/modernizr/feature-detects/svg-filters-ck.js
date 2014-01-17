// Detect support for svg filters - http://www.w3.org/TR/SVG11/filters.html.
// Should fail in Safari: http://stackoverflow.com/questions/9739955/feature-detecting-support-for-svg-filters.
// detect by erik dahlstrom
Modernizr.addTest("svgfilters",function(){var e=!1;try{e=typeof SVGFEColorMatrixElement!==undefined&&SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE==2}catch(t){}return e});