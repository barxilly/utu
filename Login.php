<html>

<?php include 'head.php'; ?>

<body>
    <header>
        <h1>UHI Tunes</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
            <li><a class="active" href="Login.php">Login</a></li>
        </ul>
    </nav>
    <h2>Miracle Security System</h2>
    <h3>Existing User - Please enter your Email address and password</h3>

    <form method="post" action="CheckUser.php">
        <table>
            <tr>
                <td>Email address :</td>
                <td><input type="text" name="Email" size="30" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="Password" size="10" /></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Check User" /></td>
            </tr>
        </table>
    </form>

    <h3>New users - click button here</h3>
    <FORM METHOD="LINK" ACTION="RegUser.php">
        <INPUT TYPE="submit" VALUE="Register">
    </FORM>


</body>

</html>