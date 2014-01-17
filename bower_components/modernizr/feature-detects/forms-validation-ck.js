// This implementation only tests support for interactive form validation.
// To check validation for a specific type or a specific other constraint,
// the test can be combined: 
//    - Modernizr.inputtypes.numer && Modernizr.formvalidation (browser supports rangeOverflow, typeMismatch etc. for type=number)
//    - Modernizr.input.required && Modernizr.formvalidation (browser supports valueMissing)
//
(function(e,t){t.formvalidationapi=!1;t.formvalidationmessage=!1;t.addTest("formvalidation",function(){var n=e.createElement("form");if("checkValidity"in n){var r=e.body,i=e.documentElement,s=!1,o=!1,u;t.formvalidationapi=!0;n.onsubmit=function(e){window.opera||e.preventDefault();e.stopPropagation()};n.innerHTML='<input name="modTest" required><button></button>';n.style.position="absolute";n.style.top="-99999em";if(!r){s=!0;r=e.createElement("body");r.style.background="";i.appendChild(r)}r.appendChild(n);u=n.getElementsByTagName("input")[0];u.oninvalid=function(e){o=!0;e.preventDefault();e.stopPropagation()};t.formvalidationmessage=!!u.validationMessage;n.getElementsByTagName("button")[0].click();r.removeChild(n);s&&i.removeChild(r);return o}return!1})})(document,window.Modernizr);