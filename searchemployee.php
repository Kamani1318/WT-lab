<?php
// Assuming you have a file named 'employees.json' with employee details
// In a real-world scenario, this would likely be a database query instead of a file read
$employeesJson = file_get_contents('employees.json');
$employees = json_decode($employeesJson, true);

$searchKeyword = '';
if (isset($_POST['search'])) {
    $searchKeyword = strtolower($_POST['search']);
}

// Filter the employees data based on the search keyword
$searchResults = array_filter($employees, function ($employee) use ($searchKeyword) {
    return strpos(strtolower($employee['name']), $searchKeyword) !== false;
});

// Return the search result as JSON
header('Content-Type: application/json');
echo json_encode(array_values($searchResults));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Search</title>
    <script>
        function searchEmployee() {
            var xhr = new XMLHttpRequest();
            var searchKeyword = document.getElementById('search').value;
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var result = JSON.parse(xhr.responseText);
                    var resultHtml = result.map(function(employee) {
                        return '<tr><td>' + employee.name + '</td><td>' + employee.position + '</td><td>' + employee.email + '</td></tr>';
                    }).join('');
                    document.getElementById('results').innerHTML = resultHtml;
                }
            };
            xhr.open('POST', 'search_employee.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('search=' + encodeURIComponent(searchKeyword));
        }
    </script>
</head>
<body>
    <h2>Search Employee</h2>
    <input type="text" id="search" onkeyup="searchEmployee()" placeholder="Enter employee name">
    <table id="results">
        <!-- Results will be displayed here -->
    </table>
</body>
</html>
