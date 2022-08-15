
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css">
</head>

<body >
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form name="RegistrationForm" id="RegistrationForm"  action="registration_process.php" method="post">
                <h2 class="text-center">
                    <strong>Create</strong> an account.
                </h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Phone Number" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="age" placeholder="Age" />
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" />I agree to the license terms.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" placeholder="Sign Up" onclick = "validate()" />
                </div><a href="../index.php" class="already">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
    <script src="http://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<script src="../js/registration.js"></script>
</body>

</html>