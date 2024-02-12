<!DOCTYPE html>
<html>

<head>
    <title>SMS |Acadamic Sign in</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />


    <link rel="stylesheet" href="../bootstrap.css" />
    <link rel="stylesheet" href="../style.css" />

</head>

<body>
    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- Login -->
            <div class=" col-12">
                <div class="col-6  index">
                    <h2 class="text-decoration-underline">Login</h2>
                    <br />
                    <div class="col-6">
                        <label class="form-label">email</label>
                        <input class="form-control " type="email" id="email" />
                    </div>
                    <div class="col-6">
                        <label class="form-label">password</label>
                        <input class="form-control" type="password" id="password" />
                    </div>

                    <!-- <div class="col-6 ">
                        <label class="form-label">verification code</label>
                        <input class="form-control " type="code" id="code" />
                    </div> -->
                    <br />
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-dark" onclick="acadamicsignin();">Login Now</button>
                    </div>
                </div>
            </div>
            <div class="col-12  fixed-bottom">
                <p class="text-center">&copy; 2022 All Rights Reserved</p>
            </div>
            <!-- Login -->
            <!-- model -->
            <div class="modal" tabindex="-1" id="verification_model">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <label class="form-label">Enter the verification code You got by the email</label>
                            <input type="text" class="form-control" id="vcode" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary" onclick="acadamicveryfy();">verify</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- model -->
        </div>
    </div>

    <script src="../bootstrap.js"></script>
    <script src="../Script.js"></script>
</body>

</html>