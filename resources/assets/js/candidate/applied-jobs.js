'use strict';
let filterJobId = null;
document.addEventListener('livewire:load', function (event) {
    window.livewire.hook('afterDomUpdate', () => {
        $('#jobApplicationStatus').select2({
            width: '100%',
        });
        $('#jobApplicationStatus').val(filterJobId).trigger('change.select2');
        setTimeout(function () { $('.alert').fadeOut('fast'); }, 4000);
    });
});

$(document).on('click', '.apply-job-note', function (event) {
    let appliedJobId = $(event.currentTarget).attr('data-id');
    $.ajax({
        url: candidateAppliedJobUrl + '/' + appliedJobId,
        type: 'GET',
        success: function (result) {
            if (result.success) {
                $('#showNote').html('');
                if (!isEmpty(result.data.notes) ? $('#showNote').
                    append(result.data.notes) : $('#showNote').append('N/A'))
                    $('#showModal').appendTo('body').modal('show');
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
});

$(document).on('click', '.remove-applied-jobs', function (event) {
    let jobId = $(event.currentTarget).attr('data-id');
    swal({
            title: Lang.get('messages.common.delete') + ' !',
            text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.applied_job.applied_jobs') + '" ?',
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
            window.livewire.emit('removeAppliedJob', jobId);
        });
});

document.addEventListener('deleted', function () {
    swal({
        title: Lang.get('messages.common.deleted') + ' !',
        text: Lang.get('messages.applied_job.applied_jobs') + Lang.get('messages.common.has_been_deleted'),
        type: 'success',
        confirmButtonColor: '#6777ef',
        timer: 2000,
    });
});

$(document).ready(function () {
    $('#jobApplicationStatus').on('change', function () {
        filterJobId = $(this).val();
        window.livewire.emit('changeFilter', 'jobApplicationStatus',
            $(this).val());
    });

    $('#jobApplicationStatus').
        select2({
            width: '100%',
        });
});
