<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

<style>
    .pnl{
background-color:rgba(0,0,0,0.5);
color: white;
padding: 9%;

}

.pnl:hover{
    box-shadow: 0px 0px 7px 7px rgba(128, 128, 128, 0.35);
}
    
    @media only screen and (max-width:599px) {
    .pnl{
        margin-left: 8%;
        margin-right: 8%;
        margin-top: 60px;
    }  
#info{
    font-size: 30px;
}

    
}
@media only screen and (min-width:600px) and (max-width: 899px) {
    #info{
        font-size: 60px;
    }
   .pnl{
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 50px;
    }  
}

@media only screen and (min-width: 900px) {
    .container{
        margin-top: 50px;
    }
    .pnl{
        margin-left: 30%;
        margin-right: 20%;
        margin-top: 8px;
    }
    #info{
    font-size: 20px;
}

}  
</style>

    </head>
    <body>
        <div class="container">
        <div class="panel panel-info pnl ">
                  
    <div class="panel-body">
        <center>  <h1 style="font-family:monotype corsiva; font-size:50px; ">Awesome!</h1>
            <p style="font-size:22px;">Your registration is completed.</p><br>
            <p id="info">Share this on your instagram and tag @malhar.mizzle <br>
            Good luck!<br>
                Regards-<br>
            Team Malhar</p>
            
        </center>
    </div>
</div>
        </div>    
    </body>
</html>
