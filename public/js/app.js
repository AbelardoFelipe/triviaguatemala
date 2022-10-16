/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("// require('./bootstrap');\nvar canvas = document.getElementById('boy');\nvar c_boy = canvas.getContext('2d');\nc_boy.shadowColor = \"black\";\nc_boy.shadowBlur = 6;\nc_boy.shadowOffsetX = 6;\nc_boy.shadowOffsetY = 6;\nvar images_boy = [];\nimages_boy.length = 16;\nfor (var _i = 1; _i < images_boy.length; _i++) {\n  images_boy[_i] = new Image();\n  images_boy[_i].src = '/storage/boy/Idle (' + _i.toString() + ').png';\n}\nvar i = 1;\nvar interval = setInterval(avatar_boy_idle, 100);\nfunction avatar_boy_idle() {\n  i++;\n  if (i >= 15) {\n    i = 1;\n  }\n  c_boy.clearRect(50, 50, 400, 400);\n  c_boy.drawImage(images_boy[i], 50, 50, 400, 400);\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJjYW52YXMiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY19ib3kiLCJnZXRDb250ZXh0Iiwic2hhZG93Q29sb3IiLCJzaGFkb3dCbHVyIiwic2hhZG93T2Zmc2V0WCIsInNoYWRvd09mZnNldFkiLCJpbWFnZXNfYm95IiwibGVuZ3RoIiwiaSIsIkltYWdlIiwic3JjIiwidG9TdHJpbmciLCJpbnRlcnZhbCIsInNldEludGVydmFsIiwiYXZhdGFyX2JveV9pZGxlIiwiY2xlYXJSZWN0IiwiZHJhd0ltYWdlIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZXF1aXJlKCcuL2Jvb3RzdHJhcCcpO1xyXG52YXIgY2FudmFzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JveScpXHJcbnZhciBjX2JveSA9IGNhbnZhcy5nZXRDb250ZXh0KCcyZCcpXHJcbmNfYm95LnNoYWRvd0NvbG9yID0gXCJibGFja1wiXHJcbmNfYm95LnNoYWRvd0JsdXIgPSA2XHJcbmNfYm95LnNoYWRvd09mZnNldFggPSA2XHJcbmNfYm95LnNoYWRvd09mZnNldFkgPSA2XHJcblxyXG52YXIgaW1hZ2VzX2JveSA9IFtdXHJcbmltYWdlc19ib3kubGVuZ3RoID0gMTZcclxuXHJcbmZvcihsZXQgaSA9IDE7IGkgPCBpbWFnZXNfYm95Lmxlbmd0aDsgaSsrKXtcclxuICAgIGltYWdlc19ib3lbaV0gPSBuZXcgSW1hZ2UoKVxyXG4gICAgaW1hZ2VzX2JveVtpXS5zcmMgPSAnL3N0b3JhZ2UvYm95L0lkbGUgKCcgKyBpLnRvU3RyaW5nKCkgKyAnKS5wbmcnXHJcbn1cclxuXHJcbmxldCBpID0gMTtcclxubGV0IGludGVydmFsID0gc2V0SW50ZXJ2YWwoYXZhdGFyX2JveV9pZGxlLCAxMDApO1xyXG5cclxuZnVuY3Rpb24gYXZhdGFyX2JveV9pZGxlKCl7XHJcbiAgICBpKytcclxuICAgIGlmKGkgPj0gMTUpe1xyXG4gICAgICAgIGkgPSAxXHJcbiAgICB9XHJcbiAgICBjX2JveS5jbGVhclJlY3QoNTAsIDUwLCA0MDAsIDQwMClcclxuICAgIGNfYm95LmRyYXdJbWFnZShpbWFnZXNfYm95W2ldLCA1MCw1MCw0MDAsNDAwKVxyXG59ICAgIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBLElBQUlBLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsS0FBSyxDQUFDO0FBQzNDLElBQUlDLEtBQUssR0FBR0gsTUFBTSxDQUFDSSxVQUFVLENBQUMsSUFBSSxDQUFDO0FBQ25DRCxLQUFLLENBQUNFLFdBQVcsR0FBRyxPQUFPO0FBQzNCRixLQUFLLENBQUNHLFVBQVUsR0FBRyxDQUFDO0FBQ3BCSCxLQUFLLENBQUNJLGFBQWEsR0FBRyxDQUFDO0FBQ3ZCSixLQUFLLENBQUNLLGFBQWEsR0FBRyxDQUFDO0FBRXZCLElBQUlDLFVBQVUsR0FBRyxFQUFFO0FBQ25CQSxVQUFVLENBQUNDLE1BQU0sR0FBRyxFQUFFO0FBRXRCLEtBQUksSUFBSUMsRUFBQyxHQUFHLENBQUMsRUFBRUEsRUFBQyxHQUFHRixVQUFVLENBQUNDLE1BQU0sRUFBRUMsRUFBQyxFQUFFLEVBQUM7RUFDdENGLFVBQVUsQ0FBQ0UsRUFBQyxDQUFDLEdBQUcsSUFBSUMsS0FBSyxFQUFFO0VBQzNCSCxVQUFVLENBQUNFLEVBQUMsQ0FBQyxDQUFDRSxHQUFHLEdBQUcscUJBQXFCLEdBQUdGLEVBQUMsQ0FBQ0csUUFBUSxFQUFFLEdBQUcsT0FBTztBQUN0RTtBQUVBLElBQUlILENBQUMsR0FBRyxDQUFDO0FBQ1QsSUFBSUksUUFBUSxHQUFHQyxXQUFXLENBQUNDLGVBQWUsRUFBRSxHQUFHLENBQUM7QUFFaEQsU0FBU0EsZUFBZSxHQUFFO0VBQ3RCTixDQUFDLEVBQUU7RUFDSCxJQUFHQSxDQUFDLElBQUksRUFBRSxFQUFDO0lBQ1BBLENBQUMsR0FBRyxDQUFDO0VBQ1Q7RUFDQVIsS0FBSyxDQUFDZSxTQUFTLENBQUMsRUFBRSxFQUFFLEVBQUUsRUFBRSxHQUFHLEVBQUUsR0FBRyxDQUFDO0VBQ2pDZixLQUFLLENBQUNnQixTQUFTLENBQUNWLFVBQVUsQ0FBQ0UsQ0FBQyxDQUFDLEVBQUUsRUFBRSxFQUFDLEVBQUUsRUFBQyxHQUFHLEVBQUMsR0FBRyxDQUFDO0FBQ2pEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FwcC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz9hODBiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;