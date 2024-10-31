<div>
    <h1> Add New User </h1>
    <form action = "add-user" method="post">
        @csrf
        <div class="input">
            <label>Name</label>
            <input type="text" placeholder="enter your name" name="username" required>
        </div>
        <div class="input">
            <label>City</label>
            <input type="text" placeholder="enter your city" name="city" required>
        </div>
        <div class="input">
            <label>Email</label>
            <input type="text" placeholder="enter email" name="email" required>
        </div>
        <div class="input">
            <button class="button">Add User</button>
        </div>
    </form>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>

<style>
    input{
        color: orangered;
        border:1px solid orage;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        cursor: pointer;
    }
    button{
        color: orangered;
        border:1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        background-color: aqua;
        cursor: pointer;
    }
</style>
