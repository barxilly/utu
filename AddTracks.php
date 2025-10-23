<html>

<?php include 'head.php'; ?>
<header>
    <h1>UHI Tunes</h1>
</header>

<nav>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="AddCD.php">Add CD</a></li>
        <li><a class="active" href="AddTracks.php">Add CD tracks</a></li>
        <li><a href="EnterSearchCDs.php">Search CDs</a></li>
        <li><a href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
        <li><a href="TableReportCalc.php">CD Report</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
</nav>

<body>
    <h1>Add CD tracks</h1>
    <form method="POST" action="InsertTrack.php">
        <table>
            <tr>
                <td>CD Title:</td>
                <td>
                    <input type="text" name="CDTitle" size="50" ">
                </td>
            </tr>
            <tr>
                <td>Number of tracks:</td>
                <td>
                    <input type=" number" name="NoTracks" size="2">
                </td>
            </tr>
            <tr>
                <td>Label:</td>
                <td>
                    <input type="text" name="Label" size="20" ">
                </td>
            </tr>
            <tr>
                <td>Release Year:</td>
                <td>
                    <input type=" text" name="ReleaseYear" size="4">
                </td>
            </tr>
            <tr>
                <td>Artist name:</td>
                <td><input type="text" name="ArtistName" size="20" "> </td>
            </tr>
            <tr>
                <td>CD Price:</td>
                <td><input type= " text" name="CDPrice" size="6" "> </td>
            </tr>
            <tr>
                <td colspan=" 2"><br><input type="submit" value="Add CD" />
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="reset" value="Clear" /></td>
            </tr>
        </table>
    </form>
</body>

</html>