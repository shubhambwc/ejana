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
/******/ 	return __webpack_require__(__webpack_require__.s = 50);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/noticeboards/noticeboards.js":
/*!**********************************************************!*\
  !*** ./resources/assets/js/noticeboards/noticeboards.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on('click', '.addNoticeboardModal', function () {
  $('#addModal').appendTo('body').modal('show');
});
$(document).on('submit', '#addNewForm', function (e) {
  e.preventDefault();

  if (!checkSummerNoteEmpty('#description', 'Description field is required.', 1)) {
    return true;
  }

  processingBtn('#addNewForm', '#btnSave', 'loading');
  $.ajax({
    url: noticeboardSaveUrl,
    type: 'POST',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#addModal').modal('hide');
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    },
    complete: function complete() {
      processingBtn('#addNewForm', '#btnSave');
    }
  });
});
$(document).on('click', '.edit-btn', function (event) {
  if (ajaxCallIsRunning) {
    return;
  }

  ajaxCallInProgress();
  var noticeboardId = $(event.currentTarget).data('id');
  renderData(noticeboardId);
});

window.renderData = function (id) {
  $.ajax({
    url: noticeboardUrl + id + '/edit',
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        var element = document.createElement('textarea');
        element.innerHTML = result.data.title;
        $('#noticeboardId').val(result.data.id);
        $('#editTitle').val(element.value);
        $('#editDescription').summernote('code', result.data.description);
        result.data.is_active == 1 ? $('#editIsActive').prop('checked', true) : $('#editIsActive').prop('checked', false);
        $('#editModal').appendTo('body').modal('show');
        ajaxCallCompleted();
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$(document).on('submit', '#editForm', function (event) {
  event.preventDefault();

  if (!checkSummerNoteEmpty('#editDescription', 'Description field is required.', 1)) {
    return true;
  }

  processingBtn('#editForm', '#btnEditSave', 'loading');
  var id = $('#noticeboardId').val();
  $.ajax({
    url: noticeboardUrl + id,
    type: 'put',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#editModal').modal('hide');
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    },
    complete: function complete() {
      processingBtn('#editForm', '#btnEditSave');
    }
  });
});
$(document).on('click', '.show-btn', function (event) {
  if (ajaxCallIsRunning) {
    return;
  }

  ajaxCallInProgress();
  var noticeboardId = $(event.currentTarget).data('id');
  $.ajax({
    url: noticeboardUrl + noticeboardId,
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#showTitle').html('');
        $('#showDescription').html('');
        $('#showTitle').append(result.data.title);
        var element = document.createElement('textarea');
        element.innerHTML = !isEmpty(result.data.description) ? result.data.description : 'N/A';
        $('#showDescription').append(element.value);
        result.data.is_active === 1 ? $('#showIsActive').html('Active') : $('#showIsActive').html('Deactive');
        $('#showModal').appendTo('body').modal('show');
        ajaxCallCompleted();
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$(document).on('click', '.delete-btn', function (event) {
  var noticeboardId = $(event.currentTarget).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.noticeboard.noticeboard') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deleteNoticeboard', noticeboardId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.noticeboard.noticeboard') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
$(document).on('change', '.isActive', function (event) {
  var noticeId = $(event.currentTarget).data('id');
  $.ajax({
    url: noticeboardUrl + noticeId + '/' + 'change-status',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    }
  });
});
$('#addModal').on('hidden.bs.modal', function () {
  resetModalForm('#addNewForm', '#validationErrorsBox');
  $('#description').summernote('code', '');
});
$('#editModal').on('hidden.bs.modal', function () {
  resetModalForm('#editForm', '#editValidationErrorsBox');
});
$('#description, #editDescription').summernote({
  minHeight: 200,
  height: 200,
  toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
});
$(document).ready(function () {
  $('#noticeboard_filter_status').select2();
  $('#noticeboard_filter_status').on('change', function (e) {
    var data = $('#noticeboard_filter_status').select2('val');
    window.livewire.emit('changeFilter', 'status', data);
  });
});

/***/ }),

/***/ 50:
/*!****************************************************************!*\
  !*** multi ./resources/assets/js/noticeboards/noticeboards.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\noticeboards\noticeboards.js */"./resources/assets/js/noticeboards/noticeboards.js");


/***/ })

/******/ });