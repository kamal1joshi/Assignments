<!DOCTYPE html>
<html>

<head>
    <title>Send HTML Form as JSON</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assign7b.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="assign7b.js"></script>

</head>

<body>

    <form id="myform" type="post">
        <fieldset>
            <legend>Ajax Form </legend>

            <div class="elements">
                <label for="fname">First Name :</label>
                <input required="required" type="text" name="fname" />
            </div>

            <div class="elements">
                <label for="lname">Last Name :</label>
                <input required="required" type="text" name="lname" />
            </div>

            <div class="elements">
                <label for="DOB">DOB :</label>
                <input required="required" type="date" id="DOB" name="DOB" />
            </div>

            <div class="submit">
                <input type="submit" id="btn" name="btn" class="btn" value="Submit" />
            </div>

        </fieldset>
    </form>
    <div id="div1">
        <table>
            <thead>
                <tr>
                    <th>First Name </th>
                    <th>Last Name </th>
                    <th> DOB</th>
                </tr>
            </thead>
            <tbody class="tabbody">

            </tbody>
        </table>
    </div>
</body>

</html>