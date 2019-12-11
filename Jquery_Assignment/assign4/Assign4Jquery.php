<!DOCTYPE html>
<html>

<head>
    <title>jquery3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assign4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="Assign4.js"></script>

</head>

<body>

    <div class="container">
        <div class="col-md-3 mx-auto my-3 d-block px-0">
            <div class="header">Manage Permission</div>
            <div class="Drop-down">
                <select name="dropdown" class="drop-down">
                    <option value="subsubfgh">subsubfgh</option>
                    <option value="subsubfgh">subsubfgh</option>
                    <option value="subsubfgh">subsubfgh</option>
                    <option value="subsubfgh">subsubfgh</option>
                </select>
            </div>
            <div class="selecter">
                <div class="Property checkgroup">
                    <div>
                        <input class="parchek" type="checkbox" name="selection">
                        <label class="mb-0">Property</label>
                    </div>
                    <ul style="list-style-type:none;">
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Edit Property</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Remove Property</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Add Property</label>
                        </li>
                    </ul>
                </div>

                <div class="Testimonial checkgroup">
                    <div>
                        <input class="parchek" type="checkbox" name="selection">
                        <label class="mb-0">Organic Updates</label>
                    </div>
                    <ul style="list-style-type:none;">
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Add</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Remove</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">View</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Edit</label>
                        </li>
                    </ul>
                </div>

                <div class="Users checkgroup">
                    <div>
                        <input class="parchek" type="checkbox" name="selection">
                        <label class="mb-0">Users</label>
                    </div>
                    <ul style="list-style-type:none;">
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Edit User</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">View User List</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Add_User</label>
                        </li>
                    </ul>
                </div>

                <div class="Membership checkgroup">
                    <div>
                        <input class="parchek" type="checkbox" name="selection">
                        <label class="mb-0">Membership</label>
                    </div>
                    <ul style="list-style-type:none;">
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Edit Membership</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Remove Membership</label>
                        </li>
                        <li>
                            <input class="childchek" type="checkbox" name="selection">
                            <label class="OU">Add Membership</label>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="submit" id="submitbtn" name="submitbtn">Submit</button>

        </div>

    </div>

</body>

</html>