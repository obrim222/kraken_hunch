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

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

eval("var btnHamburger = document.querySelector('#btnHamburger');\nvar body = document.querySelector('body');\nvar header = document.querySelector('.header');\nvar overlay = document.querySelector('.overlay');\nvar fadeElems = document.querySelectorAll('.has-fade');\nbtnHamburger.addEventListener('click', function () {\n  console.log('click hamburger');\n\n  if (header.classList.contains('open')) {\n    // Close Hamburger Menu\n    body.classList.remove('noscroll');\n    header.classList.remove('open');\n    fadeElems.forEach(function (element) {\n      element.classList.remove('fade-in');\n      element.classList.add('fade-out');\n    });\n  } else {\n    // Open Hamburger Menu\n    body.classList.add('noscroll');\n    header.classList.add('open');\n    fadeElems.forEach(function (element) {\n      element.classList.remove('fade-out');\n      element.classList.add('fade-in');\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzP2M2M2IiXSwibmFtZXMiOlsiYnRuSGFtYnVyZ2VyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiYm9keSIsImhlYWRlciIsIm92ZXJsYXkiLCJmYWRlRWxlbXMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiYWRkRXZlbnRMaXN0ZW5lciIsImNvbnNvbGUiLCJsb2ciLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInJlbW92ZSIsImZvckVhY2giLCJlbGVtZW50IiwiYWRkIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxZQUFZLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixlQUF2QixDQUFyQjtBQUNBLElBQU1DLElBQUksR0FBR0YsUUFBUSxDQUFDQyxhQUFULENBQXVCLE1BQXZCLENBQWI7QUFDQSxJQUFNRSxNQUFNLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixTQUF2QixDQUFmO0FBQ0EsSUFBTUcsT0FBTyxHQUFHSixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsVUFBdkIsQ0FBaEI7QUFDQSxJQUFNSSxTQUFTLEdBQUdMLFFBQVEsQ0FBQ00sZ0JBQVQsQ0FBMEIsV0FBMUIsQ0FBbEI7QUFFQVAsWUFBWSxDQUFDUSxnQkFBYixDQUE4QixPQUE5QixFQUF1QyxZQUFVO0FBQy9DQyxFQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWSxpQkFBWjs7QUFFQSxNQUFHTixNQUFNLENBQUNPLFNBQVAsQ0FBaUJDLFFBQWpCLENBQTBCLE1BQTFCLENBQUgsRUFBcUM7QUFBRTtBQUNyQ1QsSUFBQUEsSUFBSSxDQUFDUSxTQUFMLENBQWVFLE1BQWYsQ0FBc0IsVUFBdEI7QUFDQVQsSUFBQUEsTUFBTSxDQUFDTyxTQUFQLENBQWlCRSxNQUFqQixDQUF3QixNQUF4QjtBQUNBUCxJQUFBQSxTQUFTLENBQUNRLE9BQVYsQ0FBa0IsVUFBU0MsT0FBVCxFQUFpQjtBQUNqQ0EsTUFBQUEsT0FBTyxDQUFDSixTQUFSLENBQWtCRSxNQUFsQixDQUF5QixTQUF6QjtBQUNBRSxNQUFBQSxPQUFPLENBQUNKLFNBQVIsQ0FBa0JLLEdBQWxCLENBQXNCLFVBQXRCO0FBQ0QsS0FIRDtBQUtELEdBUkQsTUFTSztBQUFFO0FBQ0xiLElBQUFBLElBQUksQ0FBQ1EsU0FBTCxDQUFlSyxHQUFmLENBQW1CLFVBQW5CO0FBQ0FaLElBQUFBLE1BQU0sQ0FBQ08sU0FBUCxDQUFpQkssR0FBakIsQ0FBcUIsTUFBckI7QUFDQVYsSUFBQUEsU0FBUyxDQUFDUSxPQUFWLENBQWtCLFVBQVNDLE9BQVQsRUFBaUI7QUFDakNBLE1BQUFBLE9BQU8sQ0FBQ0osU0FBUixDQUFrQkUsTUFBbEIsQ0FBeUIsVUFBekI7QUFDQUUsTUFBQUEsT0FBTyxDQUFDSixTQUFSLENBQWtCSyxHQUFsQixDQUFzQixTQUF0QjtBQUNELEtBSEQ7QUFLRDtBQUNGLENBckJEIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgYnRuSGFtYnVyZ2VyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2J0bkhhbWJ1cmdlcicpO1xyXG5jb25zdCBib2R5ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignYm9keScpO1xyXG5jb25zdCBoZWFkZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuaGVhZGVyJyk7XHJcbmNvbnN0IG92ZXJsYXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcub3ZlcmxheScpO1xyXG5jb25zdCBmYWRlRWxlbXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaGFzLWZhZGUnKTtcclxuXHJcbmJ0bkhhbWJ1cmdlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgY29uc29sZS5sb2coJ2NsaWNrIGhhbWJ1cmdlcicpO1xyXG5cclxuICBpZihoZWFkZXIuY2xhc3NMaXN0LmNvbnRhaW5zKCdvcGVuJykpeyAvLyBDbG9zZSBIYW1idXJnZXIgTWVudVxyXG4gICAgYm9keS5jbGFzc0xpc3QucmVtb3ZlKCdub3Njcm9sbCcpO1xyXG4gICAgaGVhZGVyLmNsYXNzTGlzdC5yZW1vdmUoJ29wZW4nKTsgICAgXHJcbiAgICBmYWRlRWxlbXMuZm9yRWFjaChmdW5jdGlvbihlbGVtZW50KXtcclxuICAgICAgZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKCdmYWRlLWluJyk7XHJcbiAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnZmFkZS1vdXQnKTtcclxuICAgIH0pO1xyXG4gICAgXHJcbiAgfVxyXG4gIGVsc2UgeyAvLyBPcGVuIEhhbWJ1cmdlciBNZW51XHJcbiAgICBib2R5LmNsYXNzTGlzdC5hZGQoJ25vc2Nyb2xsJyk7XHJcbiAgICBoZWFkZXIuY2xhc3NMaXN0LmFkZCgnb3BlbicpO1xyXG4gICAgZmFkZUVsZW1zLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCl7XHJcbiAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSgnZmFkZS1vdXQnKTtcclxuICAgICAgZWxlbWVudC5jbGFzc0xpc3QuYWRkKCdmYWRlLWluJyk7XHJcbiAgICB9KTtcclxuXHJcbiAgfSAgXHJcbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/script.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/script.js"]();
/******/ 	
/******/ })()
;