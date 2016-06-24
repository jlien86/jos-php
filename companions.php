
<?php
$headers = ['Name', 'Age', 'Occupation'];
$companions = array(
    array(
        "name" => "Rose",
        "age" => "18",
        "occupation" => "shop clerk"
     ),
    array(
        "name" => "Martha",
        "age" => "24",
        "occupation" => "doctor"
    ),
    array(
        "name" => "Donna",
        "age" => "35",
        "occupation" => "temp"
    ),
    array(
        "name" => "Amy",
        "age" => "10",
        "occupation" => "student"
    ),
    array(
        "name" => "Clara",
        "age" => "26",
        "occupation" => "teacher"
    )
);

function buildTable ($headers, $companions) {
    $tableHTML = "<html>" . PHP_EOL . "<table>" . PHP_EOL . "<tr>" . PHP_EOL;
    foreach ($headers as $header) {
        $tableHTML .= "<th>$header</th>" . PHP_EOL;       
    }
    
    $tableHTML .= "</tr>" . PHP_EOL;
    foreach ($companions as $companion) {
        $tableHTML .= "<tr>" . PHP_EOL;
        $tableHTML .= "<td>" . $companion['name'] . "</td>" . PHP_EOL;
        $tableHTML .= "<td>" . $companion['age'] . "</td>" . PHP_EOL;
        $tableHTML .= "<td>" . $companion['occupation'] . "</td>" . PHP_EOL;
        $tableHTML .= "</tr>" . PHP_EOL;
    }
    $tableHTML .= "</table><br><br>" . PHP_EOL. "</html>";
    return $tableHTML;
}
echo buildTable($headers, $companions);
?>
