$(document).ready(function () {
    'use strict';

    $('#locationId,#industryId,#ownershipTypeId,#companySizeId,#countryId,#stateId,#cityId,#establishedIn').
        select2({
            width: '100%',
        });

    $('#details').summernote({
        minHeight: 200,
        height: 200,
        placeholder: 'Enter Employer Details...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['para', ['paragraph']]],
    });

    $('#editDetails').summernote({
        minHeight: 200,
        height: 200,
        placeholder: 'Enter Employer Details...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['para', ['paragraph']]],
    });

    $('#countryId').on('change', function () {
        $.ajax({
            url: companyStateUrl,
            type: 'get',
            dataType: 'json',
            data: { postal: $(this).val() },
            success: function (data) {
                $('#stateId').empty();
                $('#stateId').
                    append(
                        $('<option value=""></option>').text('Select State'));
                $.each(data.data, function (i, v) {
                    $('#stateId').
                        append($('<option></option>').attr('value', i).text(v));
                });
                if (isEdit && stateId) {
                    $('#stateId').val(stateId).trigger('change');
                }
            },
        });
    });

    $('#stateId').on('change', function () {
        $.ajax({
            url: companyCityUrl,
            type: 'get',
            dataType: 'json',
            data: {
                state: $(this).val(),
                country: $('#countryId').val(),
            },
            success: function (data) {
                $('#cityId').empty();
                $.each(data.data, function (i, v) {
                    $('#cityId').
                        append(
                            $('<option ></option>').attr('value', i).text(v));
                });
                if (isEdit && cityId) {
                    $('#cityId').val(cityId).trigger('change');
                }
            },
        });
    });
    if (isEdit & countryId) {
        $('#countryId').val(countryId).trigger('change');
    }

    $(document).on('change', '#logo', function () {
        let validFile = isValidFile($(this), '#validationErrorsBox');
        if (validFile) {
            displayPhoto(this, '#logoPreview');
            $('#btnSave').prop('disabled', false);
        } else {
            $('#btnSave').prop('disabled', true);
        }
    });

    $(document).on('submit', '#addCompanyForm', function (e) {
        $('#btnSave').prop('disabled', true);
        if (!checkSummerNoteEmpty('#details',
            'Employer Details field is required.', 1)) {
            e.preventDefault();
            $('#btnSave').attr('disabled', false);
            return false;
        }
    });
    $('#addCompanyForm,#editCompanyForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });
    $(document).on('submit', '#editCompanyForm', function (e) {
        $('#btnSave').prop('disabled', true);
        if (!checkSummerNoteEmpty('#editDetails',
            'Employer Details field is required.', 1)) {
            e.preventDefault();
            $('#btnSave').attr('disabled', false);
            return false;
        }
    });
   