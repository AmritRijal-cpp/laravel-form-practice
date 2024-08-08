window.onload = function () {
    var mainInput = document.getElementsByClassName('nepali-datepicker');
    var today = NepaliFunctions.GetCurrentBsDate();
    Array.from(mainInput).forEach(element => {
        element.nepaliDatePicker();
        if(element.value == "") {
            element.value = NepaliFunctions.ConvertDateFormat(today, 'YYYY-MM-DD');
        }
    });

};
$(document).ready(function () {
    $('#myTable').DataTable();
});

$(document).ready(function () {
    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id');
        var url = button.data('url');
        var update_date = button.data('update_date');
        var customer_name = button.data('customer_name');
        var address = button.data('address');
        var user_name = button.data('user_name');
        var password = button.data('password');
        var server = button.data('server');
        var folder = button.data('folder');
        var mode = button.data('mode');
        var date = button.data('date');
        var call_date = button.data('call_date');
        var response_type = button.data('response_type');
        var database_detail = button.data('database_detail');
        var status = button.data('status');
        var age = button.data('age');

        var modal = $(this);
        modal.find('#url').val(url);
        modal.find('#update_date').val(update_date);
        modal.find('#customer_name').val(customer_name);
        modal.find('#address').val(address);
        modal.find('#user_name').val(user_name);
        modal.find('#password').val(password);
        modal.find('#server').val(server);
        modal.find('#folder').val(folder);
        modal.find('#mode').val(mode);
        modal.find('#date').val(date);
        modal.find('#call_date').val(call_date);
        modal.find('#response_type').val(response_type);
        modal.find('#database_detail').val(database_detail);
        modal.find('#status').val(status);
        modal.find('#age').val(age);
    });
});