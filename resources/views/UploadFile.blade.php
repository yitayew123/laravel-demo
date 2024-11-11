<div>
    <h1>Upload File</h1>
    <form action="imageupload" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Select Your Image</label>
        <input type="file" name="file" required> <br><br>
        <button>Upload Image</button>
    </form>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
