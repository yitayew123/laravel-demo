<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
     <h1>Well Come To User Form</h1>
    <form action="methodsexample" method="get">
        <!-- <input type="hidden" name='_method' value="DELETE"> -->
        <!-- <input type="hidden" name='_method' value="DELETE"> -->

        @csrf
        <label for="name">User Name:</label>
        <input type="text" name='user' placeholder="enter user">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name='password' placeholder="enter password">
        <br>
        <br>
        <button>submit</button>
        <br>
        <br>
   </form>
</div>
