<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    h1{
        position: relative;
        left: 18em;
    }

    h2{
        position: relative;
        left: 8em;
        margin-top: 6em;
    }
    div{
        display:flex;
        text-align: center;
        justify-content: center;
        background-color: #212121;
        color: white;
        height: 100vh;
    }
    form {
        margin-top: 15em;
    }
    
    #apa {
        position: relative;
        right: 16em;
    }

    #tiger{
        position: relative;
        right: 28.6em;
        top:2em;
    }

    #giraff{
        position: relative;
        right: 41.2em;
        top:4em;
    }

    #nuts {
        position: relative;
        right: 28.4em;
        top:4.4em;
    }

    #leButt {
        position: relative;
        right: 28.5em;
        top:4.4em;
        background-color: #3232ff;
        border-radius: 5px;
        border-color: #3232ff;
        color:white;
    }
   

</style>


    
<div>
<h1>Skapa ditt zoooo</h1>
<h2>lägg till hur många djur du vill och hur mycket mat de vill ha</h2>

<form action="results.php" method="POSt">
    <input id="apa" type="number" name="apor" placeholder="NR of Apes">
    <input id="tiger" type="number" name="tiger" placeholder="NR of tiger">
    <input id="giraff"type="number" name="giraff" placeholder="NR of giraff">
    <input id="nuts" type="number" name="nut" placeholder="NR of nuts">
    <br><br>
    <button type="submit" id="leButt">visa mitt zoo</button>
</form>


</div>
  
</body>
</html>