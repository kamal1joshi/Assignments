$(document).ready(function() {
    //check/uncheck any siblings
    $('.selecter input.parchek').click(function() {
        $(this).closest("div.checkgroup").find(".childchek").prop("checked", this.checked);
    });

    //check/uncheck parent
    $('.selecter input.childchek').click(function() {
        var numChecked = $(this).closest("div.checkgroup").find(".childchek:checked").length;
        $(this).closest("div.checkgroup").find(".parchek").prop("checked", (numChecked > 0));
    });
});