<div class="container">
    <h1>Welcome to Students Page</h1>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        width: 80%;
        max-width: 900px;
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        font-size: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e9f5e9;
    }

    td {
        color: #555;
        border-bottom: 1px solid #ddd;
    }
</style>
