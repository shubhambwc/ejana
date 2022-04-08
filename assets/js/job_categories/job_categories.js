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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/job_categories/job_categories.js":
/*!**************************************************************!*\
  !*** ./resources/assets/js/job_categories/job_categories.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  $('#filterFeatured').select2();
});
$(document).ready(function () {
  $('#filterFeatured').on('change', function (e) {
    var data = $('#filterFeatured').select2('val');
    window.livewire.emit('changeFilter', 'filterFeatured', data);
  });
});
$(document).on('click', '.addJobCategoryModal', function () {
  $('#addModal').appendTo('body').modal('show');
});
$(document).on('submit', '#addNewForm', function (e) {
  e.preventDefault();
  processingBtn('#addNewForm', '#btnSave', 'loading');

  if (!checkSummerNoteEmpty('#description', 'Description field is required.')) {
    processingBtn('#addNewForm', '#btnSave');
    return true;
  }

  $.ajax({
    url: jobCategorySaveUrl,
    type: 'POST',
    data: new FormData($(this)[0]),
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
  if (ajaxCallIsRunning) {
    return;
  }

  ajaxCallInProgress();
  var jobCategoryId = $(event.currentTarget).attr('data-id');
  renderData(jobCategoryId);
});

window.renderData = function (id) {

  $.ajax({
    url: jobCategoryUrl + id + '/edit',
    type: 'GET',
    success: function success(result) {
   
      if (result.success) {
        var element = document.createElement('textarea');
        element.innerHTML = result.data.name;
        $('#jobCategoryId').val(result.data.id);
        $('#editName').val(element.value);
        $('#editDescription').summernote('code', result.data.description);
        $('#editBenifits').summernote('code', result.data.benifits);
        $('#serviceThumbnailPreview2').attr('src', result.data.thumbnail);
        $('#serviceBannerPreview2').attr('src', result.data.banner);
        result.data.is_featured == 1 ? $('#editIsFeatured').prop('checked', true) : $('#editIsFeatured').prop('checked', false);
        $('#editModal').appendTo('body').modal('show');
        ajaxCallCompleted();
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$(document).on('change', '#serviceThumbnail1', function () {

    let validFile = isValidSerFile($(this), '#serviceThumbnailValidationErrorsBox1');
    if (validFile) {
        validateSerPhoto(this, '#serviceThumbnailPreview1','#serviceThumbnailValidationErrorsBox1');
        
    } else {
      
    }
});


$(document).on('change', '#serviceBanner1', function () {

    let validFile = isValidSerFile($(this), '#serviceBannerValidationErrorsBox1');
    if (validFile) {
        validateSerPhoto(this, '#serviceBannerPreview1','#serviceBannerValidationErrorsBox1');
        
    } else {
      
    }
});



$(document).on('change', '#serviceThumbnail2', function () {

    let validFile = isValidSerFile($(this), '#serviceThumbnailValidationErrorsBox2');
    if (validFile) {
        validateSerPhoto(this, '#serviceThumbnailPreview2','#serviceThumbnailValidationErrorsBox2');
        
    } else {
      
    }
});

$(document).on('change', '#serviceBanner2', function () {

    let validFile = isValidSerFile($(this), '#serviceBannerValidationErrorsBox2');
    if (validFile) {
        validateSerPhoto(this, '#serviceBannerPreview2','#serviceBannerValidationErrorsBox2');
        
    } else {
      
    }
});

window.validateSerPhoto = function (input, selector,selectorError) {
    
    let displayPreview = true;
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            let image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                if ((image.height / image.width) !== 1) {
                    $(selectorError).
                        removeClass('d-none');
                    $(selectorError).
                        html(Lang.get('messages.common.image_aspect_ratio')).
                        show();
                    
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

window.isValidSerFile = function (inputSelector, validationMessageSelector) {

   
    let ext = $(inputSelector).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
        $(inputSelector).val('');
        $(validationMessageSelector).removeClass('d-none');
        $(validationMessageSelector).
            html(Lang.get('messages.common.image_file_type')).
            show();
        $(validationMessageSelector).delay(5000).slideUp(300);
        return false;
    }
    $(validationMessageSelector).hide();
    return true;
};



$(document).on('submit', '#editForm', function (event) {
  event.preventDefault();
  processingBtn('#editForm', '#btnEditSave', 'loading');

  if (!checkSummerNoteEmpty('#editDescription', 'Description field is required.')) {
    processingBtn('#editForm', '#btnEditSave');
    return true;
  }

  var id = $('#jobCategoryId').val();
  $.ajax({
    url: jobCategoryUrl + id + '/update',
    type: 'POST',
    data: new FormData($(this)[0]),
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
$(document).on('click', '.show-btn', function (event) {
  if (ajaxCallIsRunning) {
    return;
  }

  ajaxCallInProgress();
  var jobCategoryId = $(event.currentTarget).attr('data-id');
  $.ajax({
    url: jobCategoryUrl + jobCategoryId,
    type: 'GET',
    success: function success(result) {
      console.log(result)
      if (result.success) {
        $('#showName').html('');
        $('#showDescription').html('');
         $('#showBenifits').html('');
        $('#showIsFeatured').html('');
        $('#showName').append(result.data.name);
        if (!isEmpty(result.data.description) ? $('#showDescription').append(result.data.description) : $('#showDescription').append('N/A')) result.data.is_featured == 1 ? $('#showIsFeatured').append('Yes') : $('#showIsFeatured').append('No');
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
  var jobCategoryId = $(event.currentTarget).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.job_category.job_category') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deleteJobCategory', jobCategoryId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.job_category.job_category') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
$('#addModal').on('hidden.bs.modal', function () {
  resetModalForm('#addNewForm', '#validationErrorsBox');
  $('#description').summernote('code', '');
});
$('#editModal').on('hidden.bs.modal', function () {
  resetModalForm('#editForm', '#editValidationErrorsBox');
});
$(document).on('change', '.isFeatured', function (event) {
  var jobCategoryId = $(event.currentTarget).attr('data-id');
  activeIsFeatured(jobCategoryId);
});

window.activeIsFeatured = function (id) {
  $.ajax({
    url: jobCategoryUrl + id + '/change-status',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    }
  });
};

$('#description, #editDescription,#editBenifits,#benifits').summernote({
  minHeight: 200,
  height: 200,
});

/***/ }),

/***/ 3:
/*!********************************************************************!*\
  !*** multi ./resources/assets/js/job_categories/job_categories.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\job_categories\job_categories.js */"./resources/assets/js/job_categories/job_categories.js");


/***/ })

/******/ });