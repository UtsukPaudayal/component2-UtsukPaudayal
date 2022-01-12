<!DOCTYPE html>
<html>
<head>
  <meta charset="utf=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/add_game.css">
  <title> Add Games</title>
</head>
<body>
  <!-- <form action="/game" method="post">
 -->
     <form class="form-style-7" action="/game" method="post"> <!-- listing data into form -->
    @csrf
  <h1> Add Games</h1>

  <form>

       
       <label for="console">Console </label>
        <input type="text" name="console" placeholder="Enter Console's value" required> <!-- Required for no empty values -->
        <br> <br>
    
           <label for="title">Title </label>
        <input type="text" name="title" placeholder="Enter the title"required><!-- Required for no empty values -->
        <br> <br>
  
        <label for="pegi">Pegi </label>
        <input type="number" name="pegi" placeholder="Enter number of Pegi " required><!-- Required for no empty values -->
        <br> <br>
    

      
        <label for="price">Price </label>
        <input type="number" name="price" placeholder="Enter Price per game" required><!-- Required for no empty values -->
        <br> <br>
      

          
      <input type="submit" value="Save"><br> <br>
        <a href="{{ URL::previous() }}">Go Back</a><!-- On click navigate to previous page -->
    


</form>
 
        </body>
</html>