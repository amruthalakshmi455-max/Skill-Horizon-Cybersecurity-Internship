<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "project4", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ VULNERABLE QUERY
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "✅ Login Successful!";
    } else {
        echo "❌ Login Failed!";
    }
}
?>

<form method="POST">
    <h2>Vulnerable Login Page</h2>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>
