<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Malhar Registration form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style>
     .pnl{
background-color:rgba(0,0,0,0.5);
color: white;
margin-bottom: 30px;
}
.pnl:hover{
    box-shadow: 0px 0px 7px 7px rgba(128, 128, 128, 0.35);
}
    #logo{
        height: 40%;
        width: 40%;
        padding-top: 0px;
        margin-top: 0;
    }
    
    
@media only screen and (max-width:599px) {
    .pnl{
        margin-left: 10%;
        margin-right:10%;
       
    }
    .form-group{
        margin:60px;    
    }
    
    
}
@media only screen and (min-width:600px) and (max-width: 899px) {
    .pnl{
        margin-left: 15%;
        margin-right: 10%;
    }
        .main{
        margin-top: 100px;

    }
    .form-group{
        margin:50px;    
    }
    
}

@media only screen and (min-width: 900px) {
   .form-group{
    margin:30px;
}
 .pnl{
        margin-left: 25%;
        margin-right: 20%;
    }

}
    
    
    

.main{
    padding-top: 20px;
}
.pnl{
   padding-top: 15px;
}

</style>


    </head>
    <body>
        
         <?php
    
       include("common.php");
       ?>
        
        <div class="main">
       
    <div class="panel panel-info pnl">
     
     <div class="panel-body">
         <center>  <img src="img/malhar_logo.png" id="logo"></center>
        <h1 id="text-warning">Registration form <span class="glyphicon glyphicon-pencil"> </span>  </h1>
         
         <form method="POST" action="submit.php">
       <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
  <input type="text" class="form-control " name="name" placeholder="Name" >
</div>
       
              <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
  <input type="text" class="form-control " name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.]+\.[a-z]{2,3}$" title="Please include upper case,lower case,symbols">
</div>
             
              <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
  <input type="text" class="form-control " name="contact" placeholder="Contact Number">
</div>
             
             <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
  <input type="text" class="form-control " name="branch" placeholder="Branch">
</div>
             
              <div class="form-group" style="margin-right: 50px; margin-left: 50px;">
                  <p>Gender :</p>
                  <label style="margin-right:20px;" id="radio"><input type="radio"  name="gender" value="Male" checked style="height:17px; width:17px;" >  Male</label>
                  <label id="radio"> <input type="radio"  name="gender" value="Female" style="height:17px; width:17px;">  Female</label>
</div>
         
             
              <div class="form-group" style="margin-right: 50px; margin-left: 50px;">
                  <p> Competitions:</p>
                  <label style="margin-right:20px;" id="radio"><input type="checkbox"  name="program[]" value="chess" 
                                                                    style="height:17px; width:17px;" >  Chess</label>
                 <label style="margin-right:20px;" id="radio"><input type="checkbox"  name="program[]" value="Open mic" 
                                                                       style="height:17px; width:17px;" >  Open mic</label>
                  <label id="radio"> <input type="checkbox"  name="program[]" value="singing" style="height:17px; width:17px;">  Singing</label>
</div>
         
             
             <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
  <input type="text" class="form-control " name="ig_id" placeholder="Instagram Id">
</div>
             
              <div class="form-group" style="margin-right: 50px;margin-left: 50px;">
                  <input type="text" class="form-control " name="chess_id" placeholder="Chess.com Id">
        <p style="margin-top: 10px;margin-bottom: 0;">(Only for candidates who are registering for chess).If you do not have this id.
                      Please create an account at <a href="chess.com">  chess.com</a> </p>
</div>
             <center>  <div class="form-group">
  <input type="submit" class="btn  btn-lg btn" value="Submit" >
                 </div></center>
         
         </form>
    
     
     </div>
    </div>
  </div>
        
    </body>
</html>
