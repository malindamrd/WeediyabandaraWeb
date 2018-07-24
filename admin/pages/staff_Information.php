<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

    <!-- Navigation Bar -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/WBMV/admin/widgets/navbar.php"); ?>
    <!-- /Navigation Bar -->
    <div class="row">
        <form action="/WBMV/admin/controllers/registerstaff.php" method="post" id="detailsForm" onsubmit="return confirm('Are you sure you want to submit this form?')";>
        <div class="col-sm-4" style="padding-left: 70px;">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name">
            </div>

            <div class="form-group">
                <label for="namewithinitials">Name With Initials</label>
                <input type="text" class="form-control" id="namewithinitials" name="namewithinitials" placeholder="Name with Initial">
            </div>

            <div class="form-group">
                <label for="birthday">Date of Birth</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="">
            </div>

            <div class="form-group">
                <label for="birthday">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="" onchange="PreviewImage();" name="image">
            </div>

            <div class="form-group">
            <img id="uploadPreview" name="uploadPreview" style="width: 200px; height: 200px;" />
            </div>


            <script src="/WBMV/admin/js/imagepreview.js"></script>

        </div>
        <div class="col-sm-4">

                <div class="form-group">
                    <label for="category">Employee Category</label>
                    <select class="form-control" id="category" name="category">
                        <option>Academic Staff</option>
                        <option>Non-Academic Staff</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" class="form-control" id="address" name="address" placeholder="Address">
                </div>


        </div>
        <div class="col-sm-4" style="padding-right: 70px;">


            <div class="form-group">
                <label for="address">Mobile Number</label>
                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <label for="address">Home Number</label>
                <input type="number" class="form-control"  name="home" placeholder="Home Number">
            </div>
            <div class="form-group">
            <button class="btn btn-default" onclick="myFunction()">Submit</button>
            </div>




        </div>

        </form>

    </div>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>







</html>