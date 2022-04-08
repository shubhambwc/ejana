$(document).ready(function () {
    'use strict';
    new AutoNumeric('#amount', {
        maximumValue: 99999,
        currencySymbol: '',
        digitGroupSeparator: '\,',
        decimalPlaces: 2,
        currencySymbolPlacement:
        AutoNumeric.options.currencySymbolPlacement.suffix,
    });
});

let tableName = '#plansTbl';
$(tableName).DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: planUrl,
    },
    columnDefs: [
        {
            'targets': [1],
            'className': 'text-right',
        },
        {
            'targets': [2],
            'className': 'text-right',
        },
        {
            'targets': [3],
            'className': 'text-center',
            'width': '12%',
        },
    ],
    columns: [
        {
            data: function (row) {
                return row;
            },
            render: function (row) {
                let element = document.createElement('textarea');
                element.innerHTML = row.name;
                if (row.name.length < 60) {
                    return element.value;
                }
                return '<span data-toggle="tooltip" title="' +
                    element.value + '">' +
                    row.name.substr(0, 60).concat('...') + '</span>';
            },
            name: 'name',
        },
         {
            data: function (row) {
                return row;
            },
            render: function (row) {
                if (!isEmpty(row.salary_currency)) {
                    return row.salary_currency.currency_icon + ' ' +
                        currency(row.amount, { precision: 2 }).format();
                } else {
                    return '$ ' +
                        currency(row.amount, { precision: 2 }).format();
                }
            },
            name: 'amount',
        },
        {
            data: 'active_subscriptions_count',
            name: 'id',
        },
       {
            data: function (row) {
                let isDisabledDelete = (row.active_subscriptions_count > 0)
                    ? 'disabled'
                    : '';
                let data = [
                    {
                        'id': row.id,
                        'trial': row.is_trial_plan == 1,
                        'isDisabledDelete': isDisabledDelete,
                    }];
                return prepareTemplateRender('#planActionTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$('.addPlanModal').click(function () {
    $('#addModal').appendTo('body').modal('show');
});

$(document).on('submit', '#addNewForm', function (e) {
    e.preventDefault();
    processingBtn('#addNewForm', '#btnSave', 'loading');
    e.preventDefault();
    $.ajax({
        url: planSaveUrl,
        type: 'POST',
        data: $(this).serialize(),
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                $('#addModal').modal('hide');
                $(tableName).DataTable().ajax.reload(null, false);
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

$('#addModal').on('hidden.bs.modal', function () {
    resetModalForm('#addNewForm', '#validationErrorsBox');
});

$('#editModal').on('hidden.bs.modal', function () {
    resetModalForm('#editForm', '#editValidationErrorsBox');
});

$('#addModal').on('shown.bs.modal', function () {
    $('#name').focus();
});

$('#editModal').on('shown.bs.modal', function () {
    $('#editName').focus();
});


