(()=>{"use strict";var e={};function a(e,a){for(var t=0;t<a.length;t++){var n=a[t];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}e.d=(a,t)=>{for(var n in t)e.o(t,n)&&!e.o(a,n)&&Object.defineProperty(a,n,{enumerable:!0,get:t[n]})},e.o=(e,a)=>Object.prototype.hasOwnProperty.call(e,a);var t=$(".search-input"),n=$(".super-search"),r=$(".close-search"),o=$(".search-result"),c=null,s=function(){function e(){!function(e,a){if(!(e instanceof a))throw new TypeError("Cannot call a class as a function")}(this,e)}var s,i;return s=e,(i=[{key:"searchFunction",value:function(e){clearTimeout(c),c=setTimeout((function(){n.removeClass("search-finished"),o.fadeOut(),$.ajax({type:"GET",cache:!1,url:n.data("search-url"),data:{q:e},success:function(e){e.error?o.html(e.message):(o.html(e.data.items),n.addClass("search-finished")),o.fadeIn(500)},error:function(e){o.html(e.responseText),o.fadeIn(500)}})}),500)}},{key:"bindActionToElement",value:function(){var e=this;r.on("click",(function(a){a.preventDefault(),r.hasClass("active")?(n.removeClass("active"),o.hide(),r.removeClass("active"),$("body").removeClass("overflow"),$(".quick-search > .form-control").focus()):(n.addClass("active"),""!==t.val()&&e.searchFunction(t.val()),$("body").addClass("overflow"),r.addClass("active"))})),t.keyup((function(a){t.val(a.target.value),e.searchFunction(a.target.value)}))}}])&&a(s.prototype,i),e}();$(document).ready((function(){(new s).bindActionToElement()}))})();
