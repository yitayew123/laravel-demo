<h1>Well Come To Bladding Example</h1>
<h2>Well Come {{$name}}</h2>
<h3>Well Come User {{print_r($family)}}</h3>
<h4>Well Come User {{print_r($family[0])}}</h4>



<x-message-banner msg="user added seccesfully" class="succ"/>
<x-message-banner msg="user deleted seccesfully" class="del"/>
<x-message-banner msg="you are not successfull" class="error"/>
<x-message-banner msg="some users are missed" class="warnning"/>
<style>
    .succ{
       background-color: greenyellow; 
       padding: 2px;
       margin: 3px;
       display: inline-block;
       border-radius: 2px;
    }
    .del{
       background-color: lightcoral; 
       padding: 2px;
       margin: 3px;
       display: inline-block;
       border-radius: 2px;
    }
    .error{
       background-color: yellow; 
       padding: 2px;
       margin: 3px;
       display: inline-block;
       border-radius: 2px;
    }
    .warnning{
       background-color: red; 
       color: white;
       padding: 2px;
       margin: 3px;
       display: inline-block;
       border-radius: 2px;
    } 

</style>


