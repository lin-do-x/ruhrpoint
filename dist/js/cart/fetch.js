// JavaScript to fetch data from PHP script

fetch('php/cart/fetch/fetch.php')

    .then(response => response.json())
    .then(data => {
        console.log(data); // Output the fetched data to console (for testing)
        
        // Process the data as needed
        // Example: Loop through data and display each row
        
        data.forEach(row => {
            // Example: Displaying data in console
            console.log(row)
        });
        
  
    })
    .catch(error => console.error('Error fetching data:', error));