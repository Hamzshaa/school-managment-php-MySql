
<?php
    include("inc/top.php")
?>

<div class="container-fluid px-0">
    <div class="row">
        <div class="col-lg-12">
            <?php include("inc/navbar.php") ?>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-4">
            <h2 class="text-secondary">Register Your Name</h2><hr />
            <form action="" method="post">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label text-dark">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" style-"border:1px solid black; padding-left: 5px;" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label text-dark">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" style-"border:1px solid black; padding-left: 5px;" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label text-dark">Mobile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" style-"border:1px solid black; padding-left: 5px;" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label text-dark">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Address" name="address" style-"border:1px solid black; padding-left: 5px;" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label text-dark">Class</label>
                    <div class="col-sm-10">
                        <select name="qualification" class="form-control" style="border: 1px solid black; padding-left: 5px;">
                            <option value="">Select Class</option>
                            <option value="1">Class 1</option>
                            <option value="2">Class 2</option>
                            <option value="3">Class 3</option>
                            <option value="4">Class 4</option>
                            <option value="5">Class 5</option>
                            <option value="6">Class 6</option>
                            <option value="7">Class 7</option>
                            <option value="8">Class 8</option>
                            <option value="9">Class 9</option>
                            <option value="10">Class 10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button class="btn btn-danger" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-5 table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Sr No</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Course Fee</th>
                        <th>Batch Starts</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Class 1/SEMI/ALL</td>
                        <td>1 Yrs</td>
                        <td>9999</td>
                        <td>04/01/2015</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <h4>Address</h4>
            <address>
                Trident Academy of Technology<br />
                F-2, 6 Kilo Industrial Estate,<br />
                Lideta, Addis Ababa, India<br />
                Pin: 751024<br />
                Phone: 0674-2740133<br />
                Email: trident@gmail.com
            </address>
            <img src="images/3.jpg" alt="" class="img-fluid">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row bg-dark mt-2">
            <?php include("inc/footer.php") ?>
        </div>
    </div>
</div>



 </body>
</html>