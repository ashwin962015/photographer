<?php
include('header.php');

$alertMessage = '';
if(isset($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'ashwin' && $password == '1234') {
        $alertMessage = 'You have logged in successfully';
        $alertMessageCssClass = 'alert-success';

        header('Location: list.php');
    } else {
        $alertMessage = 'Invalid Username or Password';
        $alertMessageCssClass = 'alert-danger';
    }
}
?>
    <!-- content -->
    <section id="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 login-box">

                    <div class="panel panel-primary">
                        <div class="panel-heading text-center lead">Login</div>
                        <div class="panel-body">
                            <p id="alertBox" name="alertBox" class="alert <?php echo $alertMessageCssClass; ?>"><?php echo $alertMessage; ?></p>
                            <form method="POST" action="login.php" class="form-horizontal">

                                <div class="form-group">
                                    <label for="email" class="visible-sm col-sm-12">Email Address</label>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input class="form-control input-lg" placeholder="Username"
                                                   autofocus="autofocus" name="username" type="text" value="" id="email">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="visible-sm col-sm-12">Password</label>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input class="form-control input-lg" placeholder="Password" name="password"
                                                   type="password" value="" id="password">
                                            <span class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <input class="btn btn-success btn-lg btn-block" type="submit" value="Login">
                            </form>
                        </div>

                        <div class="panel-footer">
                            Forgot your password? &nbsp; <a href="forgotpassword.php">Reset
                                your Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->
<?php
include('footer.php');
?>