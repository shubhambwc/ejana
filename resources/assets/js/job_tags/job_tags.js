'use strict';

$(document).on('click', '.addJobTagModal', function () {
    $('#addModal').appendTo('body').modal('show');
});

$(document).on('submit', '#addNewForm', function (e) {
    e.preventDefault();
    processingBtn('#addNewForm', '#btnSave', 'loading');
    if (!checkSummerNoteEmpty('#description',
        'Description field is required.')) {
        processingBtn('#addNewForm', '#btnSave');
        return true;
    }
    $.ajax({
        url: jobTagSaveUrl,
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
    if (ajaxCallIsRunning) {
        return;
    }
    ajaxCallInProgress();
    let jobTagId = $(event.currentTarget).attr('data-id');
    renderData(jobTagId);
});

window.renderData = function (id) {
    $.ajax({
        url: jobTagUrl + id + '/edit',
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let element = document.createElement('textarea');
                element.innerHTML = result.data.name;
                $('#jobTagId').val(result.data.id);
                $('#editName').val(element.value);
                $('#editDescription').
                    summernote('code', result.data.description);
                $('#editModal').appendTo('body').modal('show');
                ajaxCallCompleted();
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
    if (!checkSummerNoteEmpty('#editDescription',
        'Description field is required.')) {
        processingBtn('#editForm', '#btnEditSave');
        return true;
    }
    const id = $('#jobTagId').val();
    $.ajax({
        url: jobTagUrl + id,
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

$(document).on('click', '.show-btn', function (event) {
    if (ajaxCallIsRunning) {
        return;
    }
    ajaxCallInProgress();
    let jobTagId = $(event.currentTarget).attr('data-id');
    $.ajax({
        url: jobTagUrl + jobTagId,
        type: 'GET',
        success: function (result) {
            if (result.success) {
                $('#showName').html('');
                $('#showDescription').html('');
                $('#showName').append(result.data.name);
                if (!isEmpty(result.data.description) ? $('#showDescription').
                    append(result.data.description) : $('#showDescription').
                    append('N/A'))
                    $('#showModal').appendTo('body').modal('show');
                ajaxCallCompleted();
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});

$(document).on('click', '.delete-btn', function (event) {
    let jobTagId = $(event.currentTarget).attr('data-id');
    swal({
            title: Lang.get('messages.common.delete') + ' !',
            text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.job_tag.show_job_tag') + '" ?',
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
            window.livewire.emit('deleteJobTag', jobTagId);
        });
});

document.addEventListener('delete', function () {
    swal({
        title: Lang.get('messages.common.deleted') + ' !',
        text: Lang.get('messages.job_tag.show_job_tag')+ Lang.get('messages.common.has_been_deleted'),
        type: 'success',
        confirmButtonColor: '#6777ef',
        timer: 2000,
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
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['para', ['paragraph']]],
});
