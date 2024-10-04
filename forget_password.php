
<!doctype html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script> 
    </head>
    <body style="margin-top:10%">
        
        <form action="forget_password_access.php" method="post">
        <div class="container">
            
            <div class="row">
                <div class="col col-3"></div>
                <div class="col col-6">
                     <div class="row alert-danger">
                            <div class="col col-12">
                                    <h1 align="center"><b><i>imppro.in</i></b></h1>
                                    <h6><i>forget password receive</i></h6>
                            </div>
                            <div class="col col-4" align="right">
                                    <b><i><h3>Email :</h3></i></b>
                                    <br>
                            </div>
                            <div class="col col-8">
                                <input type="email" name="email"  required maxlength="" minlength="3" class="form-control" placeholder="enter your email" >
                                <br>
                            </div>
                            <div class="col col-2"></div>
                            <div class="col col-4">
                                <button type="submit" name="submit" value="submit" class="form-control btn btn-danger">
                                        <b><i>Submit</i></b>
                                </button>
                                <br>
                            </div>
                            <div class="col col-4">
                                    <button type="reset" name="reset" value="reset" class="form-control btn btn-primary">
                                        <b><i>Reset</i></b>
                                    </button>
                                    <br>
                            </div>
                            <div class="col col-12"><br></div>
                     </div>
                </div>
                <div class="col col-3"></div>
            </div>
        </div>
        </form>
    </body>
</html>