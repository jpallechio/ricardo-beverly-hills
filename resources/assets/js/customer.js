// Delete button on customer list - modal
$(function() {
    $('#deleteCustomerModal').on("show.bs.modal", function (e) {
        var customerName = $(e.relatedTarget).data('name');
        $(".customerName").html(customerName);
        $("#customerNameInput").attr("value", customerName);
        $("#deleteCustomerId").attr("value", $(e.relatedTarget).data('id'));
    });
});