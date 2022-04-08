//let tableId = '#remindTable';
 
let planUrl = 'https://ejana.psd2htmlx.com/employer/del_jobs';
$(document).on('click', '.delete-btn', function (event) {
    let planId = $(event.currentTarget).data('id');
    deleteItem1( planUrl + '/' + planId, tableId, Lang.get('Job Application'));

  //  deleteItem(planUrl + '/' + planId, tableName, Lang.get('messages.plan.plan'));
});

window.deleteItem1 = function (url, tableId, header) {

  var callFunction = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + header + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    deleteItemAjax(url, tableId, header, callFunction = null);
  });
};

function deleteItemAjax(url, tableId, header) {
  var callFunction = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
  //alert(url);
  $.ajax({
    url: url,
    type: 'DELETE',
    dataType: 'json',
    success: function success(obj) {
    	

      

      swal({
        title: Lang.get('messages.common.deleted') + ' !',
        text: header + Lang.get('messages.common.has_been_deleted'),
        type: 'success',
        confirmButtonColor: '#6777ef',
        timer: 2000
      });
      if (obj.success) {
      	//var table = document.getElementById (tableId);
         window.location.reload();
        
         // $(tableId).DataTable().ajax.reload(null, false);
      }

      if (callFunction) {
        eval(callFunction);
      }
    },
    error: function error(data) {
      swal({
        title: '',
        text: data.responseJSON.message,
        type: 'error',
        confirmButtonColor: '#6777ef',
        timer: 5000
      });
    }
  });
}