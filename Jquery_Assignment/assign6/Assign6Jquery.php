<!DOCTYPE html>
<html>

<head>
    <title>json</title>
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

        <div class="col-lg-6 m-auto d-block">
            <h2 class="text-left pt-5 pb-3 text-success ">Fill the Deatils</h2>
            <form id="myform">

                <div class="form-group">
                    <label for="first">First Name:</label>
                    <input type="text" class="form-control" id="first" name="first" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label for="last">Last Name:</label>
                    <input type="text" class="form-control" id="last" name="last" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                    <label for="DOB">DOB:</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Enter Birthday, dd/mm/yyyy">
                </div>

                <button class="btn btn-success" type="submit" id="submitbtn" name="submitbtn">Submit</button>

            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#myform").submit(function() {

                var fname = $("#first").val();
                var lname = $("#last").val();
                var bday = $("#DOB").val();

                var jasonobj = {

                    "first": fname,
                    "last": lname,
                    "DOB": bday
                };

                document.write("Your Name is: " + jasonobj.first + " " + jasonobj.last + "<br>" + "<br>" + "Your Date of Birth is: " + jasonobj.DOB);
            });
        });
    </script>
</body>
</html>