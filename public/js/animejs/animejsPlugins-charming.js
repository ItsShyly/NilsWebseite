var animejsPlugins=function(e){"use strict";function t(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.tagName,r=void 0===n?"span":n,a=t.split,i=t.setClassName,o=void 0===i?function(e){return"char"+e}:i;e.normalize();var c=1;function s(e){var t=e.parentNode,n=e.nodeValue;(a?a(n):n.split("")).forEach((function(n){var a=document.createElement(r),i=o(c++,n);i&&(a.className=i),a.appendChild(document.createTextNode(n)),a.setAttribute("aria-hidden","true"),t.insertBefore(a,e)})),""!==n.trim()&&t.setAttribute("aria-label",n),t.removeChild(e)}!function e(t){if(3===t.nodeType)return s(t);var n=Array.prototype.slice.call(t.childNodes);if(1===n.length&&3===n[0].nodeType)return s(n[0]);n.forEach((function(t){e(t)}))}(e)}return e.charmingWordsChars=function(e){t(e,{split:function(e){return e.split(/(\s+)/)},setClassName:function(e){return"word-".concat(e)}}),e.querySelectorAll('span[class^="word"]').forEach((function(e){return t(e)}))},e}({});
