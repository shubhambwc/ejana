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
/******/ 	return __webpack_require__(__webpack_require__.s = 73);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/employer/dashboard.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/employer/dashboard.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$('document').ready(function () {
  'use strict';

  var timeRange = $('#timeRange');
  var today = moment();
  var start = today.clone().startOf('month');
  var end = today.clone().endOf('month');
  var jobStatus = $('#jobStatus').val();
  var gender = $('#gender').val();
  var isPickerApply = false;
  $('#jobStatus, #gender').select2({
    width: '100%'
  });
  $('#jobStatus').on('change', function (e) {
    e.preventDefault();
    jobStatus = $('#jobStatus').val();
    var gender = $('#gender').val();
    loadTotalJobsApplication(moment(start).format('YYYY-MM-D  H:mm:ss'), moment(end).format('YYYY-MM-D  H:mm:ss'), jobStatus, gender);
  });
  $('#gender').on('change', function (e) {
    e.preventDefault();
    gender = $('#gender').val();
    jobStatus = $('#jobStatus').val();
    loadTotalJobsApplication(moment(start).format('YYYY-MM-D  H:mm:ss'), moment(end).format('YYYY-MM-D  H:mm:ss'), jobStatus, gender);
  });
  timeRange.on('apply.daterangepicker', function (ev, picker) {
    isPickerApply = true;
    start = picker.startDate.format('YYYY-MM-D  H:mm:ss');
    end = picker.endDate.format('YYYY-MM-D  H:mm:ss');
    loadTotalJobsApplication(start, end, jobStatus, gender);
  });

  window.cb = function (start, end) {
    timeRange.find('span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
  };

  cb(start, end);
  var lastMonth = moment().startOf('month').subtract(1, 'days');
  var thisMonthStart = moment().startOf('month');
  var thisMonthEnd = moment().endOf('month');
  timeRange.daterangepicker({
    startDate: start,
    endDate: end,
    opens: 'left',
    showDropdowns: true,
    autoUpdateInput: false,
    ranges: {
      'Today': [moment(), moment()],
      'This Week': [moment().startOf('week'), moment().endOf('week')],
      'Last Week': [moment().startOf('week').subtract(7, 'days'), moment().startOf('week').subtract(1, 'days')],
      'This Month': [thisMonthStart, thisMonthEnd],
      'Last Month': [lastMonth.clone().startOf('month'), lastMonth.clone().endOf('month')]
    }
  }, cb);

  window.loadTotalJobsApplication = function (startDate, endDate) {
    var jobStatus = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
    var gender = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
    $.ajax({
      type: 'GET',
      url: jobsApplicationUrl,
      dataType: 'json',
      data: {
        start_date: startDate,
        end_date: endDate,
        job_status: jobStatus,
        gender: gender
      },
      cache: false
    }).done(prepareJobsReport);
  };

  window.prepareJobsReport = function (result) {
    $('#employerDashboardChart').html('');
    var data = result.data;

    if (data.totalJobApplication === 0) {
      $('#jobContainer').html('');
      $('#jobContainer').append('<div align="center" class="pt50 h150">No Records Found</div>');
      return true;
    } else {
      $('#jobContainer').html('');
      $('#jobContainer').append('<canvas id="employerDashboardChart"></canvas>');
    }

    var barChartData = {
      labels: data.dates.dateArr,
      datasets: [{
        label: 'Total Job Applications',
        backgroundColor: '#6777ef',
        data: data.jobApplicationCounts,
        borderWidth: 1
      }]
    };
    var ctx = document.getElementById('employerDashboardChart').getContext('2d');
    ctx.canvas.style.height = '400px';
    ctx.canvas.style.width = '100%';
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: barChartData,
      options: {
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            stacked: true
          }],
          yAxes: [{
            stacked: true,
            ticks: {
              min: 0,
              stepSize: 1
            }
          }]
        }
      }
    });
  };

  loadTotalJobsApplication(start.format('YYYY-MM-D  H:mm:ss'), end.format('YYYY-MM-D  H:mm:ss'), jobStatus, gender);
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

/***/ }),

/***/ 73:
/*!*********************************************************!*\
  !*** multi ./resources/assets/js/employer/dashboard.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\employer\dashboard.js */"./resources/assets/js/employer/dashboard.js");


/***/ })

/******/ });