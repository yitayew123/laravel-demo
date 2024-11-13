<div>
    <h1>Update Employee Details</h1>
    <form action="/edit-employee/{{$data->id}}" method="post">
        <input type="hidden" name="_method" value="put">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter name" />
        
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter email" />
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter phone number" />
        
        <div class="button-container">
            <button type="submit">Update Details</button>
            <a href="/list-employee" class="back-button">Back</a>
        </div>
    </form>
</div>

<!-- CSS styling for form -->
<style>
    /* Container Styling */
    div {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #4A90E2;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Form styling */
    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    label {
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus {
        border-color: #4A90E2;
        outline: none;
        box-shadow: 0px 0px 8px rgba(74, 144, 226, 0.2);
    }

    /* Center align buttons */
    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    /* Update Button Styling */
    button {
        background-color: #4A90E2;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #357ABD;
    }

    /* Back Button Styling */
    .back-button {
        background-color: #e67e22;
        color: white;
        padding: 12px 20px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 16px;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #d35400;
    }
</style>