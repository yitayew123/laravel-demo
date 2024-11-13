<div>
    <h1>Employee List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Operations</th>
        </tr>
        @foreach($data as $list_data)
        <tr>
            <td>{{$list_data->id}}</td>
            <td>{{$list_data->name}}</td>
            <td>{{$list_data->email}}</td>
            <td>{{$list_data->phone}}</td>
            <td>{{$list_data->created_at}}</td>
            <td>{{$list_data->updated_at}}</td>
            <td>
                <a href="{{'delete/'.$list_data->id}}" class="button delete-button">Delete</a>
                <a href="{{'edit/'.$list_data->id}}" class="button edit-button">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- Be present above all else. - Naval Ravikant -->
</div>

<!-- Add CSS for styling -->
<style>
    /* Allow the container to expand with content */
    div {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    
    h1 {
        text-align: center;
        color: #4A90E2;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    table, th, td {
        border: 1px solid #ddd;
    }
    
    th, td {
        padding: 12px;
        text-align: left;
    }
    
    th {
        background-color: #4A90E2;
        color: white;
        font-weight: bold;
        font-size: 16px;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #e9f4ff;
    }
    
    td {
        font-size: 14px;
    }

    /* CSS for Buttons */
    .button {
        padding: 6px 12px;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        margin-right: 5px;
    }

    .delete-button {
        background-color: #e74c3c;
    }

    .delete-button:hover {
        background-color: #c0392b;
    }

    .edit-button {
        background-color: #3498db;
    }

    .edit-button:hover {
        background-color: #2980b9;
    }
</style>
