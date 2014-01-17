// input[type="number"] localized input/output
// // Detects whether input type="number" is capable of receiving and
// // displaying localized numbers, e.g. with comma separator
// // https://bugs.webkit.org/show_bug.cgi?id=42484
// // Based on http://trac.webkit.org/browser/trunk/LayoutTests/fast/forms/script-tests/input-number-keyoperation.js?rev=80096#L9
// // By Peter Janes
Modernizr.addTest("localizedNumber",function(){var e=document,t=document.createElement("div"),n,r,i,s;r=e.body||function(){var t=e.documentElement;n=!0;return t.insertBefore(e.createElement("body"),t.firstElementChild||t.firstChild)}();t.innerHTML='<input type="number" value="1.0" step="0.1"/>';i=t.childNodes[0];r.appendChild(t);i.focus();try{e.execCommand("InsertText",!1,"1,1")}catch(o){}s=i.type==="number"&&i.valueAsNumber===1.1&&i.checkValidity();r.removeChild(t);n&&r.parentNode.removeChild(r);return s});