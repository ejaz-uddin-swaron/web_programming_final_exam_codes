<?php

$conn = new mysqli("localhost","root","","bd_cricket");

if($conn->connect_error)
{
    die("Connection Failed: " . $conn->$connect_error); 
}

// Q1
$sql = "SELECT Venue, COUNT(Venue) AS Cnt, AVG(Runs) AS Avg
FROM match_performance
GROUP BY Venue
HAVING AVG(Runs) > 50
";

$res = $conn->query($sql);

while($row = $res->fetch_assoc())
{
    echo $row["Venue"] . " " . $row["Cnt"]. " " . $row["Avg"]. "<br>";  
}

echo "<br><br>";

//Q2
$sql = "UPDATE match_performance
SET Runs = Runs + Runs * 0.05
WHERE Venue = 'Mirpur'
";

$res = $conn->query($sql);

//Q3
$sql = "SELECT PlayerName, Venue, (Runs/(Balls*100)) AS StrikeRate
FROM match_performance
ORDER BY StrikeRate DESC
LIMIT 3
";

$res = $conn->query($sql);

while($row = $res->fetch_assoc())
{
    echo $row["PlayerName"] . " " . $row["Venue"]. " " . $row["StrikeRate"] . "<br>";  
}

echo "<br><br>";

//Q4
// $sql = "SELECT PlayerName, Team
// FROM match_performance
// GROUP BY Team
// HAVING Runs > AVG(Runs)
// ";

// $res = $conn->query($sql);

// while($row = $res->fetch_assoc())
// {
//     echo $row["PlayerName"] . " " . $row["Team"] . " Above Par" . "<br>";  
// }


?>