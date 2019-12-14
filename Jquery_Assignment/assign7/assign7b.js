$(document).ready(function() {

    $("#btn").click(function(event) {
        var jsonData = {};

        var formData = $("#myform").serializeArray();

        $.each(formData, function() {
            if (jsonData[this.name]) {
                if (!jsonData[this.name].push) {
                    jsonData[this.name] = [jsonData[this.name]];
                }
                jsonData[this.name].push(this.value || '');
            } else {
                jsonData[this.name] = this.value || '';
            }
        });

        var Addtab = '<tr><td class = "k1">' + jsonData.fname + '</td><td>' + jsonData.lname + '</td><td>' + jsonData.DOB + '</td></tr>';
        $(".tabbody").append($(Addtab));
        event.preventDefault();

    });
});