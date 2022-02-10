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

/***/ "./resources/js/Admin/scripts.js":
/*!***************************************!*\
  !*** ./resources/js/Admin/scripts.js ***!
  \***************************************/
/***/ (() => {

eval("window.onload = function () {\n  $('input[id=\"agreement_date\"]').daterangepicker({\n    singleDatePicker: true,\n    showDropdowns: true,\n    minYear: 1901,\n    maxYear: parseInt(moment().format('YYYY'), 10),\n    locale: {\n      format: 'YYYY-MM-DD'\n    }\n  });\n  document.getElementById(\"clear-filters\").addEventListener(\"click\", clearFilters);\n\n  function clearFilters(e) {\n    console.log(e);\n    Object.values(e.target.closest('form').querySelectorAll('input[type=\"text\"]')).map(function (input) {\n      input.value = '';\n    }); // let submitBtnList = e.target.closest('form').querySelectorAll('[type=\"submit\"]');\n\n    if (typeof submitBtnList[0] !== \"undefined\") {\n      submitBtnList[0].click();\n    }\n  }\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvQWRtaW4vc2NyaXB0cy5qcz9lYmE1Il0sIm5hbWVzIjpbIndpbmRvdyIsIm9ubG9hZCIsIiQiLCJkYXRlcmFuZ2VwaWNrZXIiLCJzaW5nbGVEYXRlUGlja2VyIiwic2hvd0Ryb3Bkb3ducyIsIm1pblllYXIiLCJtYXhZZWFyIiwicGFyc2VJbnQiLCJtb21lbnQiLCJmb3JtYXQiLCJsb2NhbGUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiYWRkRXZlbnRMaXN0ZW5lciIsImNsZWFyRmlsdGVycyIsImUiLCJjb25zb2xlIiwibG9nIiwiT2JqZWN0IiwidmFsdWVzIiwidGFyZ2V0IiwiY2xvc2VzdCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJtYXAiLCJpbnB1dCIsInZhbHVlIiwic3VibWl0QnRuTGlzdCIsImNsaWNrIl0sIm1hcHBpbmdzIjoiQUFBQUEsTUFBTSxDQUFDQyxNQUFQLEdBQWdCLFlBQVc7QUFDdkJDLEVBQUFBLENBQUMsQ0FBQyw0QkFBRCxDQUFELENBQWdDQyxlQUFoQyxDQUFnRDtBQUM1Q0MsSUFBQUEsZ0JBQWdCLEVBQUUsSUFEMEI7QUFFNUNDLElBQUFBLGFBQWEsRUFBRSxJQUY2QjtBQUc1Q0MsSUFBQUEsT0FBTyxFQUFFLElBSG1DO0FBSTVDQyxJQUFBQSxPQUFPLEVBQUVDLFFBQVEsQ0FBQ0MsTUFBTSxHQUFHQyxNQUFULENBQWdCLE1BQWhCLENBQUQsRUFBeUIsRUFBekIsQ0FKMkI7QUFLNUNDLElBQUFBLE1BQU0sRUFBRTtBQUNKRCxNQUFBQSxNQUFNLEVBQUU7QUFESjtBQUxvQyxHQUFoRDtBQVdBRSxFQUFBQSxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsZUFBeEIsRUFBeUNDLGdCQUF6QyxDQUEwRCxPQUExRCxFQUFtRUMsWUFBbkU7O0FBQ0EsV0FBU0EsWUFBVCxDQUFzQkMsQ0FBdEIsRUFBeUI7QUFDckJDLElBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZRixDQUFaO0FBQ0FHLElBQUFBLE1BQU0sQ0FBQ0MsTUFBUCxDQUFjSixDQUFDLENBQUNLLE1BQUYsQ0FBU0MsT0FBVCxDQUFpQixNQUFqQixFQUF5QkMsZ0JBQXpCLENBQTBDLG9CQUExQyxDQUFkLEVBQStFQyxHQUEvRSxDQUFtRixVQUFBQyxLQUFLLEVBQUk7QUFDeEZBLE1BQUFBLEtBQUssQ0FBQ0MsS0FBTixHQUFjLEVBQWQ7QUFDSCxLQUZELEVBRnFCLENBT3JCOztBQUNBLFFBQUcsT0FBT0MsYUFBYSxDQUFDLENBQUQsQ0FBcEIsS0FBNEIsV0FBL0IsRUFBMkM7QUFDdkNBLE1BQUFBLGFBQWEsQ0FBQyxDQUFELENBQWIsQ0FBaUJDLEtBQWpCO0FBQ0g7QUFDSjtBQUNKLENBekJEIiwic291cmNlc0NvbnRlbnQiOlsid2luZG93Lm9ubG9hZCA9IGZ1bmN0aW9uKCkge1xuICAgICQoJ2lucHV0W2lkPVwiYWdyZWVtZW50X2RhdGVcIl0nKS5kYXRlcmFuZ2VwaWNrZXIoe1xuICAgICAgICBzaW5nbGVEYXRlUGlja2VyOiB0cnVlLFxuICAgICAgICBzaG93RHJvcGRvd25zOiB0cnVlLFxuICAgICAgICBtaW5ZZWFyOiAxOTAxLFxuICAgICAgICBtYXhZZWFyOiBwYXJzZUludChtb21lbnQoKS5mb3JtYXQoJ1lZWVknKSwxMCksXG4gICAgICAgIGxvY2FsZToge1xuICAgICAgICAgICAgZm9ybWF0OiAnWVlZWS1NTS1ERCdcbiAgICAgICAgfVxuICAgIH0pO1xuXG5cbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNsZWFyLWZpbHRlcnNcIikuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGNsZWFyRmlsdGVycyk7XG4gICAgZnVuY3Rpb24gY2xlYXJGaWx0ZXJzKGUpIHtcbiAgICAgICAgY29uc29sZS5sb2coZSk7XG4gICAgICAgIE9iamVjdC52YWx1ZXMoZS50YXJnZXQuY2xvc2VzdCgnZm9ybScpLnF1ZXJ5U2VsZWN0b3JBbGwoJ2lucHV0W3R5cGU9XCJ0ZXh0XCJdJykpLm1hcChpbnB1dCA9PiB7XG4gICAgICAgICAgICBpbnB1dC52YWx1ZSA9ICcnO1xuICAgICAgICB9KTtcblxuXG4gICAgICAgIC8vIGxldCBzdWJtaXRCdG5MaXN0ID0gZS50YXJnZXQuY2xvc2VzdCgnZm9ybScpLnF1ZXJ5U2VsZWN0b3JBbGwoJ1t0eXBlPVwic3VibWl0XCJdJyk7XG4gICAgICAgIGlmKHR5cGVvZiBzdWJtaXRCdG5MaXN0WzBdICE9PSBcInVuZGVmaW5lZFwiKXtcbiAgICAgICAgICAgIHN1Ym1pdEJ0bkxpc3RbMF0uY2xpY2soKTtcbiAgICAgICAgfVxuICAgIH1cbn07XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL0FkbWluL3NjcmlwdHMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/Admin/scripts.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/Admin/scripts.js"]();
/******/ 	
/******/ })()
;