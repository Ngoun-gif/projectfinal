// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable({
    "pageLength": 5, // Set the default number of rows to display
      "language": {
        "lengthMenu": 'Display <select>' +
        '<option value="5">5</option>' +
        '<option value="10">10</option>' +
        '<option value="15">15</option>' +
        '<option value="20">20</option>' +
        '<option value="50">50</option>' +
        '<option value="-1">All</option>' +
        '</select> records'
      }
  });
});
