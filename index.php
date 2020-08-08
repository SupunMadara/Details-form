<!DOCTYPE html>
<html>
    <head>
        <title> Detail</title>
        <link href="Vender/endor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Vender/endor/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="Vender/endor/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="Vender/endor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="newCascadeStyleSheet.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Users/PH4NTOM/Documents/NetBeansProjects/Product/public_html/responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-4">
                <div class="container ">
                    <form action="data.php" method="GET" >
                        <h1 style="text-align:center;"> Detail</h1>
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="name"> Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="fname" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="Age">Age</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="age" placeholder=" 2 characters" pattern=".{2,}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="Email">Email</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="email" placeholder="example@3.gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="pnum">Phone Number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="pnum" placeholder="0123456789" pattern="[0-9]{10}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="pss">Password</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="pss" placeholder="8 characters" pattern=".{8,}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="submit" value="Submit" >
                            </div>
                            <div class="col-lg-3">
                                <input type="reset" value="Reset" style="margin-right: 50px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
