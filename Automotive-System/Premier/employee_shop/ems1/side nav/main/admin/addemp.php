
<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>
    <div class="contentDisplay">

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">

        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
           
            <center>
                <h2 class="card-title text-info">Employee Registration</h2>
                </center>

                <br><br>

                <form action="..//process/addempprocess.php" method="POST" enctype="multipart/form-data">

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                    </div>
                    <p>Birthday</p>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" name="birthday" required="required">

                            </div>
                        </div>


                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">GENDER</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                
                                </div>
                            </div>
                        </div>


                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="NID" name="nid" required="required">
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Department" name="dept" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Degree" name="degree" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salary" name="salary">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>

                        <center>
                            <button type="button" class="btn btn-secondary btn-lg" type="submit">Submit</button>
                        </center>
                </form>
            </div>
        </div>
        </div>

    </div>

    </div>

</div>




<!-- end document-->
</body>
</html>

