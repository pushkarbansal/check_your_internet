
<?php

if(isset($_POST['visitmywebsite']))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        header('location:index.html');
    }
    else
{
    header('location:index.php');
}
}   

if(isset($_POST['visitmywebbsite']))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        header('location:g.php');
    }
    else
{
    header('location:index.php');
}
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>hello folk!!</title>
        <style>
            body {
              background-image: url('illusion.jpg');
            }
            #second{
                border: 5px solid red;
                background-color:lightcoral;
                margin-top:150px;
                margin-left: 150px;
                margin-right: 150px;
            }
            
            #hello
            {
              margin-top: -120px;
              position:fixed; 
               
            }
            #form{
                text-align: center;
            }
            #form2
            {
                margin-top:-1540px; 
            }
            #form1{
                margin-top: 20px;
            }
            #form3
            {
                border: 3px solid black;
                background-color:lightyellow;  
            }
            </style>
    </head>

    <body>
         <!--<img src="illusion.jpg" alt="something is wrong with this image">-->
           
         <div id="hello">
                <img src="logo.png" alt="" width="1517 " height="80" >
            <!--HELLO LOLLZ I THINK U ARE OON THE WRONG PAGE BUT DONT LISTEN TO ME DO WHAT YOUR HEART SAYS -->
         </div>

         <div id="second">
<p style="text-align: center; color:black; font-size:30px">
    i am a noob in making webistes but still i belive in that no one should give up, recencly i got selected as an intern as a web developer 
    (full stack) in a good company but i dont have prior experience so this one is going to be a big shit for my rest of the carrer. i m making
    this site as just as for practise some basic fundamentals stuff. tbh i am more confident in back-end programming but not so good in front end 
    hence practising by making few simple set of pages for my practise.
</p>
</div>
<div id="form">

    <form hidden id='form1' method="POST" >
    <label id='form3' for="submit">if u want to visit my webiste further on please click</label>
        <input type="submit" name="visitmywebsite" value="visit my website"> 
    </form>

    <form hidden id='form2' method="POST">
        <input type="submit" name ="visitmywebbsite" value="visit my webbsite">
        
    </form>

</div>


    </body>
</html>
