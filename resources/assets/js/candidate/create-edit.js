$(document).ready(function () {
    'use strict';

    $('#maritalStatusId, #countryId, #careerLevelId, #industryId, #functionalAreaId,#stateId,#cityId, #salaryCurrencyId, #skillId, #languageId').
        select2({
            'width': '100%',
        });

    $('#birthDate').datetimepicker(DatetimepickerDefaults({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true,
        maxDate: new Date(),
    }));

    $('#availableAt').datetimepicker(DatetimepickerDefaults({
        format: 'YYYY-MM-DD',
        useCurrent: false,
        sideBySide: true,
        minDate: new Date(),
    }));

    setTimeout(function () {
        $('input[type=radio][name=immediate_available]').trigger('change');
    }, 300);

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
                        append($('<option></option>').attr('value', i).text(v));
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

    $('#createCandidatesForm,#editCandidatesForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });

    $('input[type=radio][name=immediate_available]').change(function () {
        let radioValue = $('input[name=\'immediate_available\']:checked').val();
        if (radioValue == 1) {
            $('.available-at').hide();
        } else {
            $('.available-at').show();
        }
    });

    $('#available').click(function () {
        radio();
    });
    $('#not_available').click(function () {
        radio();
    });

    function radio () {
        let radioValue = $('input[name=\'immediate_available\']:checked').val();
        if (radioValue == '0') {
            $('.available-at').show();
        } else {
            $('.available-at').hide();
        }
    }

    $(document).
        on('submit', '#createCandidatesForm,#editCandidatesForm', function (e) {
            e.preventDefault();

            $('#createCandidatesForm,#editCandidatesForm').
                find('input:text:visible:first').
                focus();

            let facebookUrl = $('#facebookUrl').val();
            let twitterUrl = $('#twitterUrl').val();
            let linkedInUrl = $('#linkedInUrl').val();
            let googlePlusUrl = $('#googlePlusUrl').val();
            let pinterestUrl = $('#pinterestUrl').val();

            let facebookExp = new RegExp(
                /^(https?:\/\/)?((m{1}\.)?)?((w{3}\.)?)facebook.[a-z]{2,3}\/?.*/i);
            let twitterExp = new RegExp(
                /^(https?:\/\/)?((m{1}\.)?)?((w{3}\.)?)twitter\.[a-z]{2,3}\/?.*/i);
            let googlePlusExp = new RegExp(
                /^(https?:\/\/)?((w{3}\.)?)?(plus\.)?(google\.[a-z]{2,3})\/?(([a-zA-Z 0-9._])?).*/i);
            let linkedInExp = new RegExp(
                /^(https?:\/\/)?((w{3}\.)?)linkedin\.[a-z]{2,3}\/?.*/i);
            let pinterestExp = new RegExp(
                /^(https?:\/\/)?((w{3}\.)?)pinterest\.[a-z]{2,3}\/?.*/i);

            urlValidation(facebookUrl, facebookExp);
            urlValidation(twitterUrl, twitterExp);
            urlValidation(linkedInUrl, linkedInExp);
            urlValidation(googlePlusUrl, googlePlusExp);
            urlValidation(pinterestUrl, pinterestExp);

            if (!urlValidation(facebookUrl, facebookExp)) {
                displayErrorMessage('Please enter a valid Facebook Url');
                return false;
            }
            if (!urlValidation(twitterUrl, twitterExp)) {
                displayErrorMessage('Please enter a valid Twitter Url');
                return false;
            }
            if (!urlValidation(googlePlusUrl, googlePlusExp)) {
                displayErrorMessage('Please enter a valid Google Plus Url');
                return false;
            }
            if (!urlValidation(linkedInUrl, linkedInExp)) {
                displayErrorMessage('Please enter a valid Linkedin Url');
                return false;
            }
            if (!urlValidation(pinterestUrl, pinterestExp)) {
                displayErrorMessage('Please enter a valid Pinterest Url');
                return false;
            }
            $('#createCandidatesForm,#editCandidatesForm')[0].submit();

            return true;
        });
});
