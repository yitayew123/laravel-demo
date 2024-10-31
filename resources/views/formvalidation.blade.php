<div>
    <h1> Add New User </h1>
    <!-- <div>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div style="color: red;">{{$error}}</div>
        @endforeach
        @endif
    </div> -->
    <form action = "validation" method="post">
        @csrf
        <div class="input">
            <label>Name</label>
            <input type="text" placeholder="enter your name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}">
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input">
            <label>City</label>
            <input type="text" placeholder="enter your city" name="city" value="{{old('city')}}"
            class="{{$errors->first('city')?'input-error':''}}">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input">
            <label>Email</label>
            <input type="text" placeholder="enter email" name="email" value="{{old('email')}}"
            class="{{$errors->first('email')?'input-error':''}}">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="input">
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="node">
            <label for="node">Node</label>
            <span style="color: red;">@error('skill'){{$message}}@enderror</span>
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
        height: 30px;
        border-radius: 2px;
        margin: 3px;
        cursor: pointer;
    }
 
    button{
        color: orangered;
        border:1px solid;
        height: 30px;
        width: 150px;
        border-radius: 2px;
        margin: 3px;
        background-color: aqua;
        cursor: pointer;
    }
    .input-error{
        border: 1px solid;
        color: blue;
    }
</style>

