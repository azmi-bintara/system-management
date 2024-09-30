<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin Pro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <!-- Basic registration form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <!-- Registration form-->
                                        <form action="signup-check.php" method="post">

                                            <?php if (isset($_GET['error'])) { ?>
                                                <p class="error"><?php echo $_GET['error']; ?></p>
                                            <?php } ?>

                                            <?php if (isset($_GET['success'])) { ?>
                                                <p class="success"><?php echo $_GET['success']; ?></p>
                                            <?php } ?>

                                            <!-- Form Group (Username address) -->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputUsername">Username</label>
                                                <?php if (isset($_GET['uname'])) { ?>
                                                <input  class="form-control"
                                                        id="inputUsername"
                                                        type="text" 
                                                        name="uname" 
                                                        placeholder="Enter username"
                                                        value="<?php echo $_GET['uname']; ?>">
                                                <?php }else{ ?>
                                                <input class="form-control"
                                                        id="inputUsername"
                                                        type="text" 
                                                        name="uname" 
                                                        placeholder="Enter username">
                                                <?php }?>

                                            </div>
                                            <!-- Form Group (full name) -->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputFullName">Full Name</label>
                                                <?php if (isset($_GET['name'])) { ?>
                                                <input  class="form-control"
                                                        id="inputFullName"
                                                        type="text" 
                                                        name="name" 
                                                        placeholder="Enter full name"
                                                        value="<?php echo $_GET['name']; ?>">
                                                <?php }else{ ?>
                                                <input  class="form-control"
                                                        id="inputFullName"
                                                        type="text" 
                                                        name="name" 
                                                        placeholder="Enter full name">
                                                <?php }?>

                                            </div>
                                            <!-- Form Row    -->
                                            <div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Group (password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input  class="form-control" 
                                                                id="inputPassword"
                                                                type="password" 
                                                                name="password" 
                                                                placeholder="Enter password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Group (confirm password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input  class="form-control"
                                                                id="inputConfirmPassword"
                                                                type="password" 
                                                                name="re_password" 
                                                                placeholder="Confirm password">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Group (create account submit)-->
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; System Management 2024</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
