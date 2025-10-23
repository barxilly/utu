<html>

<?php include 'head.php'; ?>

<body>
    <header>
        <h1>UHI Tunes</h1>
    </header>

    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a class="active" href="AddCD.php">Add CD</a></li>
            <li><a href="EnterSearchCDs.php">Search CDs</a></li>
            <li><a href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
            <li><a href="TableReportCalc.php">CD Report</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
        </ul>
    </nav>

    <body>
        <h1>Add CD</h1>

        <?php
        include("DbConnect.php");

        $CDTitle = $_POST['CDTitle'];
        $NoTracks = $_POST['NoTracks'];
        $ReleaseYear = $_POST['ReleaseYear'];
        $Label = $_POST['Label'];
        $ArtistName = $_POST['ArtistName'];
        $CDPrice = $_POST['CDPrice'];

        echo "Title: " . $CDTitle . "<br>";
        echo "Year: " . $ReleaseYear . "<br>";
        echo "Tracks: " . $NoTracks . "<br>";
        echo "Label: " . $Label . "<br>";
        echo "Artist: " . $ArtistName . "<br>";
        echo "Price: " . $CDPrice . "<br>";

        $Query = "insert into CDsAuto (CD_title,NoTracks,Label,Release_Year,Artist_name) values ('$CDTitle','$NoTracks','$Label','$ReleaseYear','$ArtistName')";

        $Result = mysqli_query($DB, $Query);

        if ($Result)
            echo 'CD details inserted';
        else
            echo 'Sorry - unable to complete the operation at present';
        ?>

        <FORM METHOD="LINK" ACTION="AddCD.php">
            <INPUT TYPE="submit" VALUE="Back to Add CD">
        </FORM>
        <FORM METHOD="LINK" ACTION="AddTracks.php">
            <INPUT TYPE="submit" VALUE="Add tracks to CD">
        </FORM>

    </body>

</html>