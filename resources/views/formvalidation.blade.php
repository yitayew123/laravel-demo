<div>
    <!-- Container div to hold the entire form section -->
    <h1> Add New User </h1>
    <!-- Heading to indicate the purpose of the form -->
    
    <form action="validation" method="post">
        <!-- The form starts here; data will be sent to the 'validation' route using POST method -->
        @csrf
        <!-- Blade directive to include a CSRF token for securing the form submission -->

        <div class="input">
            <!-- Wrapper div for the name input field -->
            <label>Name</label>
            <!-- Label for the name input field -->
            <input type="text" placeholder="enter your name" name="username" 
                   value="{{old('username')}}"
                   class="{{$errors->first('username') ? 'input-error' : ''}}">
            <!-- 
            Text input for 'username':
            - 'placeholder' provides a hint to the user.
            - 'name' is used to identify the input on submission.
            - 'value' retains the old input value if validation fails.
            - 'class' dynamically adds 'input-error' class if there are validation errors for 'username'. 
            -->
            <span style="color: red;">
                @error('username'){{$message}}@enderror
            </span>
            <!-- 
            Displays the validation error message for 'username' in red text, 
            if there's any validation error.
            -->
        </div>

        <div class="input">
            <!-- Wrapper div for the city input field -->
            <label>City</label>
            <!-- Label for the city input field -->
            <input type="text" placeholder="enter your city" name="city" 
                   value="{{old('city')}}"
                   class="{{$errors->first('city') ? 'input-error' : ''}}">
            <!-- Similar to 'username' input, retains value and displays validation errors -->
            <span style="color: red;">
                @error('city'){{$message}}@enderror
            </span>
            <!-- Validation error message for 'city' -->
        </div>

        <div class="input">
            <!-- Wrapper div for the email input field -->
            <label>Email</label>
            <!-- Label for the email input field -->
            <input type="text" placeholder="enter email" name="email" 
                   value="{{old('email')}}"
                   class="{{$errors->first('email') ? 'input-error' : ''}}">
            <!-- Similar handling for 'email' input -->
            <span style="color: red;">
                @error('email'){{$message}}@enderror
            </span>
            <!-- Validation error message for 'email' -->
        </div>

        <div class="input">
            <!-- Wrapper div for the skill selection -->
            <h4>User Skill</h4>
            <!-- Subheading for skill checkboxes -->
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <!-- Checkbox for the PHP skill -->
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">Java</label>
            <!-- Checkbox for the Java skill -->
            <input type="checkbox" name="skill[]" id="node" value="node">
            <label for="node">Node</label>
            <!-- Checkbox for the Node skill -->
            <span style="color: red;">
                @error('skill'){{$message}}@enderror
            </span>
            <!-- Validation error message for 'skill', if no skill is selected -->
        </div>

        <div class="input">
            <!-- Wrapper div for the submit button -->
            <button class="button">Add User</button>
            <!-- Submit button to add the user -->
        </div>
    </form>
    <!-- End of the form -->
    <!-- 
    Inspirational quote: 
    "The biggest battle is the war against ignorance." - Mustafa Kemal Atatürk
    -->
</div>

<style>
    /* General styling for input fields */
    input {
        color: orangered;
        border: 1px solid orange; /* Fixing typo from 'orage' */
        height: 30px;
        border-radius: 2px;
        margin: 3px;
        cursor: pointer;
    }

    /* Styling for the submit button */
    button {
        color: orangered;
        border: 1px solid;
        height: 30px;
        width: 150px;
        border-radius: 2px;
        margin: 3px;
        background-color: aqua;
        cursor: pointer;
    }

    /* Styling for inputs with validation errors */
    .input-error {
        border: 1px solid; /* Red border to indicate error */
        color: blue; /* Blue text color for emphasis */
    }
</style>
