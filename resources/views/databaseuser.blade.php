<div>
    <h1>Welcome to Database User</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified At</th>
            <th>Password</th>
            <th>Remember Token</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%; /* Make table stretch to full width */
        border-collapse: collapse;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        word-break: break-word; /* Ensures text wraps if it's too long */
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    td {
        border-bottom: 1px solid #ddd;
    }

    div {
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
        width: 90%; /* Container width adjusted */
        max-width: 1200px; /* Prevents excessive stretch on large screens */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>