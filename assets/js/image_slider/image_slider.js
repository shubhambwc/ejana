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
/******/ 	return __webpack_require__(__webpack_require__.s = 67);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/image_slider/image_slider.js":
/*!**********************************************************!*\
  !*** ./resources/assets/js/image_slider/image_slider.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  $('#image_filter_status').select2();
});
$(document).on('submit', '#addNewForm', function (e) {
  e.preventDefault();

  if (!checkSummerNoteEmpty('#description', 'Description field is required.')) {
    return true;
  }

  processingBtn('#addNewForm', '#btnSave', 'loading');
  $.ajax({
    url: imageSliderSaveUrl,
    type: 'POST',
    data: new FormData($(this)[0]),
    dataType: 'JSON',
    processData: false,
    contentType: false,
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
  var imageSliderId = $(event.currentTarget).data('id');
  renderData(imageSliderId);
});

window.renderData = function (id) {
  $.ajax({
    url: imageSliderUrl + id + '/edit',
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#imageSliderId').val(result.data.id);

        if (isEmpty(result.data.image_slider_url)) {
          $('#editPreviewImage').attr('src', defaultDocumentImageUrl);
        } else {
          $('#editPreviewImage').attr('src', result.data.image_slider_url);
          $('#imageSliderUrl').attr('href', result.data.image_slider_url);
          $('#imageSliderUrl').text(view);
        }

        $('#editDescription').summernote('code', result.data.description);
        result.data.is_active == 1 ? $('#editIsActive').prop('checked', true) : $('#editIsActive').prop('checked', false);
        $('#editModal').appendTo('body').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$(document).on('submit', '#editForm', function (event) {
  event.preventDefault();

  if (!checkSummerNoteEmpty('#editDescription', 'Description field is required.')) {
    return true;
  }

  processingBtn('#editForm', '#btnEditSave', 'loading');
  var id = $('#imageSliderId').val();
  $.ajax({
    url: imageSliderUrl + id + '/update',
    type: 'POST',
    data: new FormData($(this)[0]),
    dataType: 'JSON',
    processData: false,
    contentType: false,
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
$(document).on('click', '.addImageSliderModal', function () {
  $('#addModal').appendTo('body').modal('show');
});
$(document).on('click', '.delete-btn', function (event) {
  var imageSliderId = $(event.currentTarget).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.image_slider.image_slider') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deleteImageSlider', imageSliderId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.image_slider.image_slider') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
$('#addModal').on('hidden.bs.modal', function () {
  resetModalForm('#addNewForm', '#validationErrorsBox');
  $('#description').summernote('code', '');
  $('#previewImage').attr('src', defaultDocumentImageUrl);
});
$('#editModal').on('hidden.bs.modal', function () {
  resetModalForm('#editForm', '#editValidationErrorsBox');
  $('#editDescription').summernote('code', '');
  $('#editPreviewImage').attr('src', defaultDocumentImageUrl);
});
$('#description, #editDescription').summernote({
  minHeight: 200,
  height: 200,
  toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
});

window.displayImage = function (input, selector, validationMessageSelector) {
  var displayPreview = true;

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      var image = new Image();
      image.src = e.target.result;

      image.onload = function () {
        if (image.height < 500 || image.width < 1140) {
          $('#imageSlider').val('');
          $(validationMessageSelector).removeClass('d-none');
          $(validationMessageSelector).html(imageSizeMessage).show();
          return false;
        }

        $(selector).attr('src', e.target.result);
        displayPreview = true;
      };
    };

    if (displayPreview) {
      reader.readAsDataURL(input.files[0]);
      $(selector).show();
    }
  }
};

window.isValidImage = function (inputSelector, validationMessageSelector) {
  var ext = $(inputSelector).val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
    $(inputSelector).val('');
    $(validationMessageSelector).removeClass('d-none');
    $(validationMessageSelector).html(imageExtensionMessage).show();
    return false;
  }

  $(validationMessageSelector).hide();
  return true;
};

$(document).on('change', '#imageSlider', function () {
  $('#addModal #validationErrorsBox').addClass('d-none');

  if (isValidImage($(this), '#addModal #validationErrorsBox')) {
    displayImage(this, '#previewImage', '#addModal #validationErrorsBox');
  }
});
$(document).on('change', '#editImageSlider', function () {
  $('#editModal #editValidationErrorsBox').addClass('d-none');

  if (isValidFile($(this), '#editModal #editValidationErrorsBox')) {
    displayImage(this, '#editPreviewImage', '#editModal #editValidationErrorsBox');
  }
});
$(document).on('change', '.isActive', function (event) {
  var imageSliderId = $(event.currentTarget).data('id');
  changeIsActive(imageSliderId);
});

window.changeIsActive = function (id) {
  $.ajax({
    url: imageSliderUrl + id + '/change-is-active',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$('.isFullSlider').on('change', function () {
  $.ajax({
    url: imageSliderUrl + 'change-full-slider',
    method: 'post',
    data: $('#searchIsActive').serialize(),
    dataType: 'JSON',
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$('.isSliderActive').on('change', function () {
  $.ajax({
    url: imageSliderUrl + 'change-slider-active',
    method: 'post',
    dataType: 'JSON',
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$(document).on('click', '.show-btn', function (event) {
  var imageSliderId = $(event.currentTarget).data('id');
  $.ajax({
    url: imageSliderUrl + imageSliderId,
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#showDescription').html('');
        $('#documentUrl').html('');

        if (isEmpty(result.data.image_slider_url)) {
          $('#documentUrl').hide();
          $('#noDocument').show();
        } else {
          $('#noDocument').hide();
          $('#documentUrl').show();
          $('#documentUrl').attr('src', result.data.image_slider_url);
        }

        var element = document.createElement('textarea');
        element.innerHTML = !isEmpty(result.data.description) ? result.data.description : 'N/A';
        $('#showDescription').append(element.value);
        $('#showModal').appendTo('body').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$(document).ready(function () {
  $('#image_filter_status').on('change', function (e) {
    var data = $('#image_filter_status').select2('val');
    window.livewire.emit('changeFilter', 'status', data);
  });
});

/***/ }),

/***/ 67:
/*!****************************************************************!*\
  !*** multi ./resources/assets/js/image_slider/image_slider.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\image_slider\image_slider.js */"./resources/assets/js/image_slider/image_slider.js");


/***/ })

/******/ });