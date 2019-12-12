<!DOCTYPE html>
<html>

<head>
    <title>jquery3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assign5.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="Assign5.js"></script>

</head>

<body>

    <div class="container">
        <hr class="mt-4" style="width: 83%;">

        <div class="col-md-11 mx-auto my-3 d-block px-0">

            <div class="header">Property Image</div>
            <div class="row mx-0">
                <div class="col-md-3" style=" border-right: 1px solid #eeeeee;">
                    <p class=" left_col">Property Image</p>
                </div>
                <div class="col-md-9">
                    <div class="none"></div>
                    <form class="form-inline">
                        <div>
                            <input type="text" class="input" id="input" name="text" style="height: 0%">
                            <button type="file" name="myFile"> Browse...</button>
                            <input type="file" class="input" id="file" name="text" style="height: 0%; display: none"> 

                        </div>
                        <div class="Drop-down pl-3">
                            <select name="dropdown" class="drop-down">
                                <option value="primary image">Primary Image</option>
                                <option value="secondary image">Secondary Image</option>
                                <option value="secondary image">Secondary Image</option>
                                <option value="secondary image">Secondary Image</option>
                            </select>
                        </div>
                        <p class="remove"> Remove</p>
                    </form>

                    <br>
                    <p class="add"> Add Another </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>