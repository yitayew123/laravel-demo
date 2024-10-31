<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
     <h1>URL2 Example</h1>
     <!-- Accessesing Current URL -->
     <h3>{{URL::current()}}</h3>
     <!-- full URL -->
      <h3>{{URL::full()}}</h3>

      <!-- Alternative Method Same Output-->
      <h3>{{url()->current()}}</h3>
      <h3>{{url()->full()}}</h3>

        <!-- For checking Last URL -->
      <a href="url1">url1</a>
      Last URL -----> {{URL::previous()}}
</div>
