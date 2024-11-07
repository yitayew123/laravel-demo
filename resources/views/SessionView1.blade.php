<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Well Come to Login Page </h1>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
     <form action="loginsession" method="post">
        @csrf
        <label for="username">UserName:</label>
        <input type="text" name="username" placeholder="Enter User Name">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter User Password">
        <br>
        <br>
        <button>Login</button>
     </form>
</div>

