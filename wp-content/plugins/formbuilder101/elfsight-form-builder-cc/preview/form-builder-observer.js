/*
    Elfsight Form Builder
    Version: 1.0.1
    Release date: Fri Oct 05 2018

    https://elfsight.com

    Copyright (c) 2018 Elfsight, LLC. ALL RIGHTS RESERVED
*/

/*!
 * 
 * 	elfsight.com
 * 
 * 	Copyright (c) 2018 Elfsight, LLC. ALL RIGHTS RESERVED
 * 
 */
!function(t){var e={};function i(o){if(e[o])return e[o].exports;var n=e[o]={i:o,l:!1,exports:{}};return t[o].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=t,i.c=e,i.d=function(t,e,o){i.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:o})},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=0)}([function(t,e){!function(t){(window.eapps=window.eapps||{}).observer=function(t,i,o){t.$watch("widget.data.layout",function(){"floating"===t.widget.data.layout?(e("width",!1,i),e("floatingIcon",!0,i),e("floatingText",!0,i)):(e("width",!0,i),e("floatingIcon",!1,i),e("floatingText",!1,i))}),t.$watch("widget.data.actionAfterSubmit",function(){"message"===t.widget.data.actionAfterSubmit?(e("successMessage",!0,i),e("successContinueText",!0,i),e("redirectUrl",!1,i)):"redirect"===t.widget.data.actionAfterSubmit?(e("successMessage",!1,i),e("successContinueText",!1,i),e("redirectUrl",!0,i)):"hide"===t.widget.data.actionAfterSubmit&&(e("successMessage",!1,i),e("successContinueText",!1,i),e("redirectUrl",!1,i))}),t.$watch("widget.data.fields",function(t,e){void 0!==t&&t!==e&&t.forEach(function(i,o){"group"===t[o].type&&t[o].fields&&t[o].fields.forEach(function(t){"scaleThumb"===t.type&&"Option 1\nOption 2"===t.options&&(t.options="Like\nDislike")}),t[o]&&e[o]&&t[o].type!==e[o].type&&"scaleThumb"===t[o].type&&"Option 1\nOption 2"===t[o].options&&(t[o].options="Like\nDislike")})},!0)};var e=function t(e,i,o){o.forEach(function(n,r){if(n.id===e)return o[r].visible=i,!1;n&&n.properties&&t(e,i,n.properties),n.complex&&n.complex.properties&&t(e,i,n.complex.properties),n.subgroup&&n.subgroup.properties&&t(e,i,n.subgroup.properties)})}}()}]);