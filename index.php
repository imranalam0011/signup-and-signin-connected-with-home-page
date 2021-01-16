<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="index1.css">
</head>

<body>
    <div class="signupForm">
        <h1>SIGN UP</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="name"><b>Name:</b></label>
                <input type="text" name="name" placeholder="Enter your name" required="required"><br />
            </p>
            <p>
                <label for="email"><b>Email-id:</b></label>
                <input type="email" name="email" placeholder="Enter your email" required="required"><br />
            </p>
            <p>
                <label for="password"><b>Password:</b></label>
                <input type="password" name="password" placeholder="Enter your password" required="required"><br />
            </p>
            <p>
                <label><b>Gender:</b></label>
                <select name="gender" id="">
                    <option value="">Select Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                </select><br />
            </p>
            <p>
                <label for="mobile"><b>M-number:</b></label>
                <input type="number" name="mobile" placeholder="Enter your mobile" required="required"><br />
            </p>
            <p>
                <label for="address"><b>Address:</b></label>
                <textarea name="address" placeholder="enter address" required="required"></textarea><br />
            </p>
            <p>
                <button type="submit" name="submit">SignUp</button><br />
            </p>
            <p>
                
                <<p>Already have an account? <a href="login.php">Login here</a>.</p>
            </p>
        </form>
    </div>

</body>

</html>
