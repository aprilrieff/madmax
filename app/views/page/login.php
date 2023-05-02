<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php require_once(APPROOT . "/views/inc/navbar.php") ?>
    <div class="p-5 mb-4 rounded-3 text-center container" style="margin: 0 auto;">
        <h1 class="display-4" style="margin-top: 4rem !important;"><?php echo $data["title"] ?></h1>
    </div>
    <div class="container">
        <div class="row">
            <?php flash("register-success"); ?>
            <div class="col-md-12 mx-auto">
                <?php flash("logout-success"); ?>
                <?php flash("login-fail"); ?>
                <div class="card card-body" style="margin: 0 auto;">
                    <form action="<?php echo URLROOT; ?>/user/login" method="POST">
                        <div class="form-group mb-2">
                            <label for="email">Email Address</label>
                            <input class="form-control <?php echo !empty($data["email_error"]) ? "is-invalid" : "" ?>"
                                   type="text" id="email" name="email" value="<?php echo $data["email"] ?>">
                            <?php if (!empty($data["email_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["email_error"] ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-2">
                            <label for="fullName">Password</label>
                            <input class="form-control <?php echo !empty($data["password1_error"]) ? "is-invalid" : "" ?>"
                                   type="password" id="password1" name="password1"
                                   value="<?php echo $data["password1"] ?>">
                            <?php if (!empty($data["password1_error"])): ?>
                                <span class="invalid-feedback"><?php echo $data["password1_error"] ?></span>
                            <?php endif; ?>
                        </div>

                        <input type="submit" class="btn btn-primary" style="margin-bottom: 4rem !important;" value="Login">
                        <a href="<?php echo URLROOT; ?>/page/register" class="btn btn-outline-primary" style="color: black !important; margin-bottom: 4rem !important;">Don't have an
                            account? Register</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>