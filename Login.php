<html>

<head>
    <title>UHI Tunes</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <header>
        <h1>UHI Tunes</h1>
    </header>
    <h2>Miracle Security System</h2>

    <h2>Existing User - Please enter your Email address and password</h2>

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

    <h2>New users - click button here</h2>
    <FORM METHOD="LINK" ACTION="RegUser.php">
        <INPUT TYPE="submit" VALUE="Register">
    </FORM>


</body>
<footer>

</footer>

</html>