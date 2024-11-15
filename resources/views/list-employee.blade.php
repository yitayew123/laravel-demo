<div>
    <h1>Employee List</h1>
    <!-- Search Form -->
    <form action="search" method="get" class="search-form">
        <label for="search">Your Name:</label>
        <input type="text" name="search" placeholder="Enter Name to Search" 
        value="{{@$search}}" required />
        <button type="submit" class="button search-button">Search</button>
    </form>

    <!-- Employee Table -->
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
    
    <!-- Pagination Links -->
    <form action="" class="pagination" {{$data->links()}}></form>
</div>

<!-- Add CSS for styling -->
<style>
    /* Container Styling */
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

    /* Form Styling */
    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    label {
        font-size: 14px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 300px;
        transition: box-shadow 0.3s;
    }

    input[type="text"]:focus {
        outline: none;
        box-shadow: 0 0 8px rgba(74, 144, 226, 0.5);
        border-color: #4A90E2;
    }

    /* Table Styling */
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

    /* Button Styling */
    .button {
        padding: 10px 15px;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        margin-right: 5px;
        cursor: pointer;
        border: none;
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

    .search-button {
        background-color: #2ecc71;
    }

    .search-button:hover {
        background-color: #27ae60;
    }

    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center; /* Center-align pagination */
        align-items: center; /* Vertically align pagination items */
        margin-top: 20px;
        gap: 5px; /* Add spacing between pagination items */
        list-style-type: none;
        padding: 0;
    }

    .pagination li {
        margin: 0; /* Remove extra margin */
    }

    .pagination a, .pagination span {
        display: inline-block;
        padding: 8px 12px; /* Adjust padding for better spacing */
        font-size: 14px;
        color: #4A90E2;
        text-decoration: none;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    .pagination a:hover {
        background-color: #4A90E2;
        color: white;
    }

    .pagination .active span {
        background-color: #4A90E2;
        color: white;
        border-color: #4A90E2;
    }

    .pagination .disabled span {
        color: #999;
        cursor: not-allowed;
        background-color: #f2f2f2;
    }
</style>