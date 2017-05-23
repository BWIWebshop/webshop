<html>
    <head>
        <meta charset="UTF-8">
        <title>formular</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <form action='' method="post">
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control" required >
                    <option value="">Please choose your gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Your name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="surname" placeholder="Your surname" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your email adress"class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="street" placeholder="Your street" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="zip" placeholder="Your ZIP" class="form-control" required pattern="(?=.*?[0-9]).{4,}" title="At least 4 numbers.">
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="Your city" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Your username" class="form-control" required>
            </div>
            <h4>Payment method:</h4>
            <div>
                <input type="radio" name="paymentMethod" value="Credit card" required> Credit card<br>
                <input type="radio" name="paymentMethod" value="PayPal"> PayPal<br>
                <input type="radio" name="paymentMethod" value="Apple pay"> Apple pay<br>
                <input type="radio" name="paymentMethod" value="Manual payment"> Manual payment
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Your password" class="form-control" 
                       required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" 
                       title="Password has to contain at least 8 characters with 1 lower letter, 1 upper letter and 1 number.">
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return validate()">Create account</button>
        </form>
        
        <!-- password match check !-->
        <script type="text/javascript">
            function validate() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            }
        </script>
        <?php
        $gender = $_POST['gender'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        ?>
    </body>
</html>

