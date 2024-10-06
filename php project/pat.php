<html>

<head>
    <link rel="stylesheet" href="css\stlye 1.css">
</head>

<body>
<div class="div">
    <form method="post">
        <label>search</label>
        <input type="text"  class="input"name="search">
        <input type="submit" class="input2" name="submit">
    </form>
    <?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

// Get the search term from the user
$searchTerm=$_POST['search'];

// Prepare the SQL query
$sql = 'SELECT * FROM patients WHERE name LIKE :searchTerm';

// Bind the search term to the query
$stmt = $db->prepare($sql);
$stmt->bindParam(':searchTerm', $searchTerm);

// Execute the query
$stmt->execute();

// Get the results
$results = $stmt->fetchAll();

// Check if the results are empty
if (empty($results)) {
    // No results found, show error message
    echo 'No results found for ' . $searchTerm;
} else {
    // Results found, show them in a table
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>phone</th>';
   
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through the results and display them in the table
    foreach ($results as $result) {
        echo '<tr>';
        echo '<td>' . $result['name'] . '</td>';
        echo '<td>' . $result['phone'] . '</td>';
       
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

?>
</div>

</body>
</html>