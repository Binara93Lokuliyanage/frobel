<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Request</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            max-width: 600px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
            width: 50%;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>New Contact Request</h2>

    <table>
        <tr>
            <th>Personal Information</th>
            <th></th>
        </tr>
        <tr>
            <td>First Name:</td>
            <td>{{$data['first_name']}}</td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td>{{$data['last_name']}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Inquiry Details</th>
            <th></th>
        </tr>
        <tr>
            <td>Message:</td>
            <td>{{$data['message']}}</td>
        </tr>
        <tr>
            <td>Contact:</td>
            <td>{{$data['contact']}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$data['email']}}</td>
        </tr>
    </table>

    <!-- Add more styling and details as needed -->

</body>
</html>
