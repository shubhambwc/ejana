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
/******/ 	return __webpack_require__(__webpack_require__.s = 54);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/blogs/blogs.js":
/*!********************************************!*\
  !*** ./resources/assets/js/blogs/blogs.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var tableName = '#blogTbl';
$(tableName).DataTable({
  scrollX: false,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  'order': [[0, 'asc']],
  ajax: {
    url: blogUrl
  },
  columnDefs: [{
    'targets': [0],
    'width': '20%'
  }, {
    'targets': [1],
    render: function render(data) {
      return data.length > 100 ? data.substr(0, 100) + '...' : data;
    }
  }, {
    'targets': [2],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: function data(row) {
      var element = document.createElement('textarea');
      element.innerHTML = row.title;
      var showUrl = blogUrl + '/' + row.id;
      return '<a href="' + showUrl + '" class="show-btn" data-id="' + row.id + '">' + element.value + '</a>';
    },
    name: 'title'
  }, {
    data: function data(row) {
      if (!isEmpty(row.description)) {
        var element = document.createElement('textarea');
        element.innerHTML = row.description;
        return element.value;
      } else return 'N/A';
    },
    name: 'description'
  }, {
    data: function data(row) {
      var url = blogUrl + '/' + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#blogActionTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.btnDeletePost', function (event) {
  var postId = $(this).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.post.post') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deletePost', postId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.post.post') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
var loadStretchy;
$(document).ready(function () {
  $('#filterCategory').select2({
    width: '100%'
  });

  loadStretchy = function loadStretchy() {
    if ($('.cd-stretchy-nav').length > 0) {
      $(document).on('click', '.cd-nav-trigger', function () {
        var stretchyNav = $(this).closest('nav');

        if (stretchyNav.hasClass('nav-is-visible')) {
          stretchyNav.removeClass('nav-is-visible');
        } else {
          $('.cd-stretchy-nav').removeClass('nav-is-visible');
          stretchyNav.addClass('nav-is-visible');
        }
      });
      $(document).on('click', function (event) {
        !$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span') && $('.cd-stretchy-nav').removeClass('nav-is-visible');
      });
    }
  };

  loadStretchy();
});
var filterCategoryId = null;
document.addEventListener('livewire:load', function () {
  window.livewire.hook('afterDomUpdate', function () {
    $('#filterCategory').select2({
      width: '100%'
    });
    $('#filterCategory').val(filterCategoryId).trigger('change.select2');
  });
});
$(document).on('change', '#filterCategory', function () {
  filterCategoryId = $(this).val();
  window.livewire.emit('filterPost', $(this).val());
});

/***/ }),

/***/ 54:
/*!**************************************************!*\
  !*** multi ./resources/assets/js/blogs/blogs.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\blogs\blogs.js */"./resources/assets/js/blogs/blogs.js");


/***/ })

/******/ });