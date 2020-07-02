<?php
    include('includes/config.php');
    include('includes/classes/Account.php');
    include('includes/classes/Constants.php');
    // new instance of Account class
    $account = new Account($con);

    include('includes/handlers/register-handler.php');
    include('includes/handlers/login-handler.php');

    // Get old input values
    function getInputValues($name)
    {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slotify</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="container" id="loginContainer">
        <div class="row pt-5 justify-content-center">
            <div class="col-5">


                <div class="loginInput">
                    <h3 class="pb-3">Введите ваши регистрационные данные для входа в ваш личный кабинет.</h3>
                    <form id="loginForm" action="register.php" method="post">
        
                        <div class="form-group">  
                            <label for="loginUsername">Логин</label>
                            <input type="text" class="form-control" name="loginUsername" id="loginUsername" required
                            value="<?php getInputValues('loginUsername') ?>">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Пароль</label>
                            <input type="password" class="form-control" name="loginPassword" id="loginPassword" required>
                            <?php echo $account->getError(Constants::$loginError) ?>
                        </div>

                        <button type="submit" class="btn btn-primary" name="loginButton">Войти</button>

                        <div class="hasAccountText text-center">
                            <span id="hideLogin">У вас еще нет аккаунта? Зарегистрируйтесь здесь</span>
                        </div>

                    </form>
                </div>

                <div class="registerInput">
                    <h3 class="pb-3">Форма регистрации</h3>
                    <form id="loginForm" action="register.php" method="post">

                        <div class="form-group row">
                            <label for="username">Логин</label>
                            <input type="text" id="username" name="username" class="form-control" required
                                   value="<?php getInputValues('username') ?>">
                            <?php echo $account->getError(Constants::$userNameCharacters) ?>
                            <?php echo $account->getError(Constants::$usernameTaken) ?>
                        </div>

                        <div class="form-group row">
                            <label for="firstName">Имя</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" required
                                   value="<?php getInputValues('firstName') ?>">
                            <?php echo $account->getError(Constants::$firstNameCharacters) ?>
                        </div>

                        <div class="form-group row">
                            <label for="lastName">Фамилия</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" required
                                   value="<?php getInputValues('lastName') ?>">
                            <?php echo $account->getError(Constants::$lastNameCharacters) ?>
                        </div>

                        <div class="form-group row">
                            <label for="email">Почта</label>
                            <input type="email" id="email" name="email" class="form-control" required
                                   value="<?php getInputValues('email') ?>">
                            <?php echo $account->getError(Constants::$emailsDoNotMatch) ?>
                            <?php echo $account->getError(Constants::$emailInvalid) ?>
                            <?php echo $account->getError(Constants::$emailTaken) ?>
                        </div>

                        <div class="form-group row">
                            <label for="email2">Подтвердите почту</label>
                            <input type="email" id="email2" name="email2" class="form-control" required
                                   value="<?php getInputValues('email2') ?>">
                        </div>

                        <div class="form-group row">
                            <label for="password">Пароль</label>
                            <input type="password" id="password" name="password" class="form-control" required
                                   value="<?php getInputValues('password') ?>">
                            <?php echo $account->getError(Constants::$passDoNotMatch) ?>
                            <?php echo $account->getError(Constants::$passNotAlphaNumeric) ?>
                            <?php echo $account->getError(Constants::$passCharacters) ?>
                        </div>

                        <div class="form-group row">
                            <label for="password2">Подтвердите пароль</label>
                            <input type="password" id="password2" name="password2" class="form-control" required
                                   value="<?php getInputValues('password2') ?>">
                        </div>

                        <button type="submit" class="btn btn-primary" name="registerButton">Отправить</button>

                        <div class="hasAccountText text-center">
                            <span id="hideRegister">Уже есть аккаунт? Войдите сюда.</span>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
    if(isset($_POST['registerButton'])) {
        echo '<script>
                    $(document).ready(function () {
                        $(".registerInput").show();
                        $(".loginInput").hide();
                    })
                </script>';
    } else {
        echo '<script>
                    $(document).ready(function () {
                        $(".registerInput").hide();
                        $(".loginInput").show();
                    })
                </script>';
    }
    ?>
    <script src="assets/js/register.js"></script>
</body>
</html>