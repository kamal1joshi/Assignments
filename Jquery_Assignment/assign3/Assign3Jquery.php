<!DOCTYPE html>
<html>

<head>
    <title>jquery3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="#"></script>

</head>

<body>
    <div class="container">

        <div class="border border-info text-center col-lg-6 my-5 mx-auto py-3 d-block rounded-sm " style="border-width:3px !important">

            <h3 class="mb-0"><a id = "anchor" href="https://www.w3schools.com">Different JQuery Events</a></h3>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("a").focus(function() {
                $(this).css("background-color", "yellow");
            });
            $("a").blur(function() {
                $(this).css("background-color", "lightSeaGreen");
            });

            document.getElementById("anchor").addEventListener("click", function(event) {
                event.preventDefault()
            });

            $("a").click(function() {
                alert("you clicked on the link");
            });

            $("a").hover(function() {
                    $(this).css("border", " solid Violet");
                },
                function() {
                    $(this).css("border", " solid DodgerBlue");
                });
            $("a").mouseenter(function() {
                $(this).css("text-transform", "uppercase");
            });
            $("a").mouseleave(function() {
                $(this).css("text-transform", "lowercase");
            });

        });
    </script>

</body>

</html>