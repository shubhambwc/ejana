$(document).on('click', '.edit-btn', function (event) {
    let planId = $(event.currentTarget).data('id');
    renderData(planId);
});

window.renderData = function (id) {
    $.ajax({
        url: planUrl + '/' + id + '/edit',
        type: 'GET',
        success: function (result) {
            if (result.success) {
                let element = document.createElement('textarea');
                element.innerHTML = result.data.name;
                $('#planId').val(result.data.id);
                $('#editName').val(element.value);
                $('#editAmount').val(result.data.amount);
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
    var id = $('#planId ').val();
    $.ajax({
        url: planUrl + '/' + id,
        type: 'put',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $('#editModal').modal('hide');
                $(tableName).DataTable().ajax.reload(null, false);
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
    let planId = $(event.currentTarget).data('id');
    deleteItem(planUrl + '/' + planId, tableName, Lang.get('messages.plan.plan'));
});