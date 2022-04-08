'use strict';

$(document).on('click', '.addRequiredDegreeLevelTypeModal', function () {
    $('#addModal').appendTo('body').modal('show');
});

$(document).on('submit', '#addNewForm', function (e) {
    e.preventDefault();
    processingBtn('#addNewForm', '#btnSave', 'loading');
    $.ajax({
        url: requiredDegreeLevelSaveUrl,
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $('#addModal').modal('hide');
                window.livewire.emit('refresh');
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
        complete: function () {
            processingBtn('#addNewForm', '#btnSave');
        },
    });
});

$(document).on('click', '.edit-btn', function (event) {
    let requiredDegreeLevelId = $(event.currentTarget).attr('data-id');
    renderData(requiredDegreeLevelId);
});

window.renderData = function (id) {
    $.ajax({
        url: requiredDegreeLevelUrl + id + '/edit',
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let element = document.createElement('textarea');
                element.innerHTML = result.data.name;
                $('#requiredDegreeLevelId').val(result.data.id);
                $('#editName').val(element.value);
                $('#editModal').appendTo('body').modal('show');
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
};

$(document).on('submit', '#editForm', function (event) {
    event.preventDefault();
    processingBtn('#editForm', '#btnEditSave', 'loading');
    const id = $('#requiredDegreeLevelId').val();
    $.ajax({
        url: requiredDegreeLevelUrl + id,
        type: 'put',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $('#editModal').modal('hide');
                window.livewire.emit('refresh');
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
        complete: function () {
            processingBtn('#editForm', '#btnEditSave');
        },
    });
});

$(document).on('click', '.delete-btn', function (event) {
    let requiredDegreeLevelId = $(event.currentTarget).attr('data-id');
    swal({
            title: Lang.get('messages.common.delete') + ' !',
            text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.required_degree_level.show_required_degree_level') + '" ?',
            type: 'warning',
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            confirmButtonColor: '#6777ef',
            cancelButtonColor: '#d33',
            cancelButtonText: Lang.get('messages.common.no'),
            confirmButtonText: Lang.get('messages.common.yes'),
        },
        function () {
            window.livewire.emit('deleteDegree', requiredDegreeLevelId);
        });
});

document.addEventListener('delete', function () {
    swal({
        title: Lang.get('messages.common.deleted') + ' !',
        text: Lang.get('messages.required_degree_level.show_required_degree_level') + Lang.get('messages.common.has_been_deleted'),
        type: 'success',
        confirmButtonColor: '#6777ef',
        timer: 2000,
    });
});

$('#addModal').on('hidden.bs.modal', function () {
    resetModalForm('#addNewForm', '#validationErrorsBox');
});

$('#editModal').on('hidden.bs.modal', function () {
    resetModalForm('#editForm', '#editValidationErrorsBox');
});
