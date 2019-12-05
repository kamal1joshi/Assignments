<!DOCTYPE html>
<html>

<head>
    <title>jquery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="JQueryAssign1.js"></script>

</head>

<body>
    <div class="container">

        <div class="col-lg-6 m-auto d-block">
            <h2 class="text-left pt-5 pb-3 text-success ">Fill the Form</h2>
            <form id="myform">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" autocomplete="off">
                    <h6 id="emailcheck"> </h6>
                </div>
                <div id="CheckPassword">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="Password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        <h6 id="passcheck"> </h6>
                    </div>

                    <div class="form-group">
                        <label for="cfmpassword ">Confirm Password:</label>
                        <input type="Password" class="form-control" id="cfmpassword" name="cfmpassword" placeholder="Enter Password Again">
                        <h6 id="conpasscheck"> </h6>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox"></label>Agree To Terms And Conditions</label>
                    <h6 id="check_box"> </h6>
                </div>

                <button class="btn btn-success" type="submit" id="submitbtn" name="submitbtn">Submit</button>

            </form>
        </div>

</body>

</html>