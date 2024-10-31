<div>
    <h1>User Form Part 2</h1>
    <form action="adduser" method="post">
        @csrf
        <div>
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" id="php" value="php" required>
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java" required>
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="node" required>
            <label for="node">Node</label>
        </div>

        <div>
        <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" required>
            <label for="female">Female</label>
        </div>

        <div>
        <h4>User Age</h4>
            <input type="range" name="age" id="age" max="100" min="18" required>
            <label for="age">Age</label>
        </div>
        <div>
        <h4>User City</h4>
            <select name = "city">
                <option value="Addis Abeba">Addis Abebe</option>
                <option value="Hawassa">Hawassa</option>
                <option value="shakisso">Shakisso</option>
                <option value="jimma">Jimma</option>
            </select>
        </div>
        <div>
            <button>Add New Usser</button>
        </div>
    </form>
</div>
