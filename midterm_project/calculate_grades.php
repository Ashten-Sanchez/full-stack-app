<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $assignments = [];

    for ($i = 1; $i <= 6; $i++) {

        if (isset($_POST["assignment{$i}_points_earned"]) && isset($_POST["assignment{$i}_points_possible"])){
            $pointsEarned = $_POST["assignment{$i}_points_earned"];
            $pointsPossible = $_POST["assignment{$i}_points_possible"];
            $assignments[$i] = [
                'earned' => $pointsEarned,
                'possible' => $pointsPossible,
                'grade' => $pointsPossible > 0 ? $pointsEarned / $pointsPossible : 0
            ];
        }

        else {
            $assignments[$i] = [
                'earned' => 0,
                'possible' => 0,
                'grade' => 0
            ];
        }
        
    }

    $totalPointsEarned = array_sum(array_column($assignments, 'earned'));
    $totalPointsPossible = array_sum(array_column($assignments, 'possible'));
    $overallGrade = $totalPointsPossible > 0 ? $totalPointsEarned / $totalPointsPossible : 0;

    echo "<h1>Grade Results</h1>";
    echo "<table border='1'>
            <tr>
                <th>Assignments</th>
                <th>Points Earned</th>
                <th>Points Possible</th>
                <th>Grade</th>
            </tr>";
    
    foreach ($assignments as $i => $assignment) {

        echo "<tr>
                <th>Assignment $i</th>
                <th>{$assignment['earned']}</th>
                <th>{$assignment['possible']}</th>
                <th>" . number_format($assignment['grade'] * 100, 2) . "%</th>
            </tr>";
    }   

    echo "</table>";

    echo "<h2>Overall Grade: " . number_format($overallGrade * 100, 2) . "%</h2>";
}

else {
    echo "<h1>No data submitted!</h1>";
}

?>

