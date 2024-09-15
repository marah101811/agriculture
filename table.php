<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Table</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd; /* Border around the table */
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd; /* Border bottom for each cell */
    }

    th {
        background-color: #f2f2f2; /* Background color for header cells */
    }

    tr:hover {
        background-color: #f5f5f5; /* Hover background color for rows */
    }
</style>
</head>
<body>

<h2>Styled Table</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>123-456-7890</td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>jane@example.com</td>
            <td>987-654-3210</td>
        </tr>
        <tr>
            <td>Mike Johnson</td>
            <td>mike@example.com</td>
            <td>456-789-0123</td>
        </tr>
    </tbody>
</table>

</body>
</html>
