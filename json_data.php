<?php
// This could be replaced with a file_get_contents() call to a JSON file
$jsonData = '[
    {"name":"John Doe", "position":"Project Manager", "email":"johndoe@example.com"},
    {"name":"Jane Smith", "position":"Developer", "email":"janesmith@example.com"},
    {"name":"Emily Jones", "position":"Designer", "email":"emilyjones@example.com"}
]';

// Decode the JSON data into an associative array
$employees = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Employee Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= htmlspecialchars($employee['name']) ?></td>
                <td><?= htmlspecialchars($employee['position']) ?></td>
                <td><?= htmlspecialchars($employee['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
