/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 81);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/dashboard/admin-dashboard.js":
/*!**********************************************************!*\
  !*** ./resources/assets/js/dashboard/admin-dashboard.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  'use strict';

  var timeRange = $('#timeRange');
  var isPickerApply = false;
  var today = moment();
  var start = today.clone().startOf('week');
  var end = today.clone().endOf('week');
  timeRange.on('apply.daterangepicker', function (ev, picker) {
    isPickerApply = true;
    start = picker.startDate.format('YYYY-MM-D  H:mm:ss');
    end = picker.endDate.format('YYYY-MM-D  H:mm:ss');
    loadDashboardData(start, end);
  });
  var lastMonth = moment().startOf('month').subtract(1, 'days');
  var thisMonthStart = moment().startOf('week');
  var thisMonthEnd = moment().endOf('week');

  window.cb = function (start, end) {
    timeRange.find('span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
  };

  timeRange.daterangepicker({
    startDate: start,
    endDate: end,
    opens: 'left',
    showDropdowns: true,
    autoUpdateInput: false,
    ranges: {
      'This Week': [moment().startOf('week'), moment().endOf('week')],
      'Last Week': [moment().startOf('week').subtract(7, 'days'), moment().startOf('week').subtract(1, 'days')]
    }
  }, cb);
  cb(start, end);

  window.loadDashboardData = function (startDate, endDate) {
    $.ajax({
      type: 'GET',
      url: adminDashboardChartData,
      dataType: 'json',
      data: {
        start_date: startDate,
        end_date: endDate
      },
      cache: false
    }).done(WeeklyBarChart, PostStatistics);
  };

  window.WeeklyBarChart = function (result) {
    $('#weeklyUserBarChartContainer').html('');
    $('canvas#weeklyUserBarChart').remove();
    $('#weeklyUserBarChartContainer').append('<canvas id="weeklyUserBarChart" width="515" height="413"></canvas>');
    var data = result.data.weeklyChartData;
    var weeklyData = {
      labels: data.weeklyLabels,
      datasets: [{
        label: 'Help Requesters',
        backgroundColor: '#6777ef',
        data: data.totalEmployerCount
      }, {
        label: 'Helpers',
        backgroundColor: '#3abaf4',
        data: data.totalCandidateCount
      }]
    };
    var ctx = $('#weeklyUserBarChart');
    var config = new Chart(ctx, {
      type: 'bar',
      data: weeklyData,
      options: {
        scales: {
          xAxes: [{
            stacked: true,
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            stacked: true,
            ticks: {
              min: 0,
              precision: 0
            },
            type: 'linear'
          }]
        }
      }
    });
  };

  window.PostStatistics = function (result) {
    $('#postStatisticsChartContainer').html('');
    $('canvas#postStatisticsChart').remove();
    $('#postStatisticsChartContainer').append('<canvas id="postStatisticsChart" width="1031" height="400"></canvas>');
    var data = result.data.postStatisticsChartData;
    var postStatisticsLineChartData = {
      labels: data.weeklyPostLabels,
      datasets: [{
        label: 'Posts',
        data: data.totalPostCount,
        backgroundColor: '#6777ef',
        borderColor: '#6777ef',
        hoverOffset: 4,
        pointRadius: 5,
        pointHoverRadius: 5,
        fill: false,
        tension: 0.1
      }]
    };
    var postStatistics = $('#postStatisticsChart');
    var myChart = new Chart(postStatistics, {
      type: 'line',
      data: postStatisticsLineChartData,
      options: {
        legend: false,
        scales: {
          xAxes: [{
            stacked: true,
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            stacked: true,
            ticks: {
              min: 0,
              precision: 0
            },
            type: 'linear'
          }]
        }
      }
    });
  };

  loadDashboardData(start.format('YYYY-MM-D H:mm:ss'), end.format('YYYY-MM-D H:mm:ss'));
});
$(document).ready(function () {
  var applyBtn = $('.range_inputs > button.applyBtn');
  $(document).on('click', '.ranges li', function () {
    if ($(this).data('range-key') === 'Custom Range') {
      applyBtn.css('display', 'initial');
    } else {
      applyBtn.css('display', 'none');
    }
  });
  applyBtn.css('display', 'none');
});
$(document).ready(function () {
  $("#recent-employee-scroll").niceScroll();
});

/***/ }),

/***/ 81:
/*!****************************************************************!*\
  !*** multi ./resources/assets/js/dashboard/admin-dashboard.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\dashboard\admin-dashboard.js */"./resources/assets/js/dashboard/admin-dashboard.js");


/***/ })

/******/ });