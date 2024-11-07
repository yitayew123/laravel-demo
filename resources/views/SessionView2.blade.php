<div>
    <!-- <h1>{{session('username')}}</h1> -->
    <h1>Well Come to User Profile Page</h1>
   @if(session('username'))
    <h4>Well Come {{session('username')}}</h4>
   @else
    <h4>User is Not Found On the Session <a href="loginsession">login</a></h4> 
   @endif

    <!-- Well begun is half done. - Aristotle -->
</div>
<a href="logout">Logout</a>
<!-- For Printting all required Data/Specific Data -->
<h5>{{print_r(session('alldata'))}}</h5>
<h5>{{print_r(session('alldata')['username'])}}</h5>

