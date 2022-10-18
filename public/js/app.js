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

eval("// require('./bootstrap');\n\n// Seccion animacion de avatar\nvar canvas = document.getElementById('boy');\nvar c_boy = canvas.getContext('2d');\nc_boy.shadowColor = \"black\";\nc_boy.shadowBlur = 6;\nc_boy.shadowOffsetX = 6;\nc_boy.shadowOffsetY = 6;\nvar images_boy = [];\nimages_boy.length = 16;\nfor (var _i = 1; _i < images_boy.length; _i++) {\n  images_boy[_i] = new Image();\n  images_boy[_i].src = '/storage/boy/Idle (' + _i.toString() + ').png';\n}\nvar i = 1;\nvar interval = setInterval(avatar_boy_idle, 100);\nfunction avatar_boy_idle() {\n  i++;\n  if (i >= 15) {\n    i = 1;\n  }\n  c_boy.clearRect(50, 50, 400, 400);\n  c_boy.drawImage(images_boy[i], 50, 50, 400, 400);\n}\n// termina seccion editar avatar\n\nvar progressBarFill = document.getElementById('progressBarFill');\nvar questionCounter = 8;\nvar MAX_QUESTIONS = 10;\nprogressBarFill.style.width = \"\".concat(questionCounter / MAX_QUESTIONS * 100, \"%\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJjYW52YXMiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY19ib3kiLCJnZXRDb250ZXh0Iiwic2hhZG93Q29sb3IiLCJzaGFkb3dCbHVyIiwic2hhZG93T2Zmc2V0WCIsInNoYWRvd09mZnNldFkiLCJpbWFnZXNfYm95IiwibGVuZ3RoIiwiaSIsIkltYWdlIiwic3JjIiwidG9TdHJpbmciLCJpbnRlcnZhbCIsInNldEludGVydmFsIiwiYXZhdGFyX2JveV9pZGxlIiwiY2xlYXJSZWN0IiwiZHJhd0ltYWdlIiwicHJvZ3Jlc3NCYXJGaWxsIiwicXVlc3Rpb25Db3VudGVyIiwiTUFYX1FVRVNUSU9OUyIsInN0eWxlIiwid2lkdGgiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIHJlcXVpcmUoJy4vYm9vdHN0cmFwJyk7XHJcblxyXG4vLyBTZWNjaW9uIGFuaW1hY2lvbiBkZSBhdmF0YXJcclxudmFyIGNhbnZhcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdib3knKVxyXG52YXIgY19ib3kgPSBjYW52YXMuZ2V0Q29udGV4dCgnMmQnKVxyXG5jX2JveS5zaGFkb3dDb2xvciA9IFwiYmxhY2tcIlxyXG5jX2JveS5zaGFkb3dCbHVyID0gNlxyXG5jX2JveS5zaGFkb3dPZmZzZXRYID0gNlxyXG5jX2JveS5zaGFkb3dPZmZzZXRZID0gNlxyXG5cclxudmFyIGltYWdlc19ib3kgPSBbXVxyXG5pbWFnZXNfYm95Lmxlbmd0aCA9IDE2XHJcblxyXG5mb3IobGV0IGkgPSAxOyBpIDwgaW1hZ2VzX2JveS5sZW5ndGg7IGkrKyl7XHJcbiAgICBpbWFnZXNfYm95W2ldID0gbmV3IEltYWdlKClcclxuICAgIGltYWdlc19ib3lbaV0uc3JjID0gJy9zdG9yYWdlL2JveS9JZGxlICgnICsgaS50b1N0cmluZygpICsgJykucG5nJ1xyXG59XHJcblxyXG5sZXQgaSA9IDE7XHJcbmxldCBpbnRlcnZhbCA9IHNldEludGVydmFsKGF2YXRhcl9ib3lfaWRsZSwgMTAwKTtcclxuXHJcbmZ1bmN0aW9uIGF2YXRhcl9ib3lfaWRsZSgpe1xyXG4gICAgaSsrXHJcbiAgICBpZihpID49IDE1KXtcclxuICAgICAgICBpID0gMVxyXG4gICAgfVxyXG4gICAgY19ib3kuY2xlYXJSZWN0KDUwLCA1MCwgNDAwLCA0MDApXHJcbiAgICBjX2JveS5kcmF3SW1hZ2UoaW1hZ2VzX2JveVtpXSwgNTAsNTAsNDAwLDQwMClcclxufSAgIFxyXG4vLyB0ZXJtaW5hIHNlY2Npb24gZWRpdGFyIGF2YXRhclxyXG5cclxuY29uc3QgcHJvZ3Jlc3NCYXJGaWxsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Byb2dyZXNzQmFyRmlsbCcpO1xyXG5cclxubGV0IHF1ZXN0aW9uQ291bnRlciA9IDg7XHJcbmNvbnN0IE1BWF9RVUVTVElPTlMgPSAxMDtcclxuXHJcbiBwcm9ncmVzc0JhckZpbGwuc3R5bGUud2lkdGggPSBgJHsocXVlc3Rpb25Db3VudGVyIC8gTUFYX1FVRVNUSU9OUykgKiAxMDB9JWA7XHJcblxyXG4iXSwibWFwcGluZ3MiOiJBQUFBOztBQUVBO0FBQ0EsSUFBSUEsTUFBTSxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxLQUFLLENBQUM7QUFDM0MsSUFBSUMsS0FBSyxHQUFHSCxNQUFNLENBQUNJLFVBQVUsQ0FBQyxJQUFJLENBQUM7QUFDbkNELEtBQUssQ0FBQ0UsV0FBVyxHQUFHLE9BQU87QUFDM0JGLEtBQUssQ0FBQ0csVUFBVSxHQUFHLENBQUM7QUFDcEJILEtBQUssQ0FBQ0ksYUFBYSxHQUFHLENBQUM7QUFDdkJKLEtBQUssQ0FBQ0ssYUFBYSxHQUFHLENBQUM7QUFFdkIsSUFBSUMsVUFBVSxHQUFHLEVBQUU7QUFDbkJBLFVBQVUsQ0FBQ0MsTUFBTSxHQUFHLEVBQUU7QUFFdEIsS0FBSSxJQUFJQyxFQUFDLEdBQUcsQ0FBQyxFQUFFQSxFQUFDLEdBQUdGLFVBQVUsQ0FBQ0MsTUFBTSxFQUFFQyxFQUFDLEVBQUUsRUFBQztFQUN0Q0YsVUFBVSxDQUFDRSxFQUFDLENBQUMsR0FBRyxJQUFJQyxLQUFLLEVBQUU7RUFDM0JILFVBQVUsQ0FBQ0UsRUFBQyxDQUFDLENBQUNFLEdBQUcsR0FBRyxxQkFBcUIsR0FBR0YsRUFBQyxDQUFDRyxRQUFRLEVBQUUsR0FBRyxPQUFPO0FBQ3RFO0FBRUEsSUFBSUgsQ0FBQyxHQUFHLENBQUM7QUFDVCxJQUFJSSxRQUFRLEdBQUdDLFdBQVcsQ0FBQ0MsZUFBZSxFQUFFLEdBQUcsQ0FBQztBQUVoRCxTQUFTQSxlQUFlLEdBQUU7RUFDdEJOLENBQUMsRUFBRTtFQUNILElBQUdBLENBQUMsSUFBSSxFQUFFLEVBQUM7SUFDUEEsQ0FBQyxHQUFHLENBQUM7RUFDVDtFQUNBUixLQUFLLENBQUNlLFNBQVMsQ0FBQyxFQUFFLEVBQUUsRUFBRSxFQUFFLEdBQUcsRUFBRSxHQUFHLENBQUM7RUFDakNmLEtBQUssQ0FBQ2dCLFNBQVMsQ0FBQ1YsVUFBVSxDQUFDRSxDQUFDLENBQUMsRUFBRSxFQUFFLEVBQUMsRUFBRSxFQUFDLEdBQUcsRUFBQyxHQUFHLENBQUM7QUFDakQ7QUFDQTs7QUFFQSxJQUFNUyxlQUFlLEdBQUduQixRQUFRLENBQUNDLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQztBQUVsRSxJQUFJbUIsZUFBZSxHQUFHLENBQUM7QUFDdkIsSUFBTUMsYUFBYSxHQUFHLEVBQUU7QUFFdkJGLGVBQWUsQ0FBQ0csS0FBSyxDQUFDQyxLQUFLLGFBQU9ILGVBQWUsR0FBR0MsYUFBYSxHQUFJLEdBQUcsTUFBRyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hcHAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

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