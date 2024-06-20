<?php

// Function to get data from database and return as JSON
function getDataFromDatabase($query)
{

    $host = 'localhost'; // Database host
    $dbname = 'ruhrpoint'; // Database name
    $username = 'root'; // Database username
    $password = 'almoussa'; // Database password

    try {
        // Connect to the database using PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set PDO to throw exceptions on errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $pdo->prepare($query);

        // Execute the query
        $stmt->execute();

        // Fetch all rows as an associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close the cursor and connection
        $stmt->closeCursor();
        $pdo = null;

        // Return the result (array of rows) as JSON
        return json_encode($result);
    } catch (PDOException $e) {
        // Handle database connection errors
        die("Error: " . $e->getMessage());
    }
}

// Output JSON data
$query_kart = "SELECT 
    prudact.p_id, 
    prudact.titel, 
    prudact.sub_titel, 
    prudact.category, 
    prudact.desc, 
    prudact.img_path, 
    prudact.price, 
    prudact.available,
    SUM(shopping_cart.crowd) AS total_ordered
FROM 
    shopping_cart 
INNER JOIN 
    prudact 
ON 
    prudact.p_id = shopping_cart.p_id 
WHERE 
    shopping_cart.u_id = 1
GROUP BY 
    prudact.p_id, 
    prudact.titel, 
    prudact.sub_titel, 
    prudact.category, 
    prudact.desc, 
    prudact.img_path, 
    prudact.price, 
    prudact.available;
";

echo getDataFromDatabase($query_kart);
