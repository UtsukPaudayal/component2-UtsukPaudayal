<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/add_cd.css">
  <title>Cd</title>
</head>
<body>
  

  <form class="form-style-7" action="/cd" method="post"> <!-- Creating form and listing the items -->
    @csrf
    <h1>CDs</h1>
    
      <form>
        <label for="artist">Artist </label>
        <input type="text" name="artist" placeholder="Enter Artist's full name here"required> <!-- Required for no empty values -->
        <br><br>
      

    
        <label for="title">Title </label>
        <input type="text" name="title" placeholder="Enter Title here"required><!-- Required for no empty values -->
        <br><br>
      

      
        <label for="duration">Duration </label>
        <input type="number" name="duration"placeholder="Duration of songs " required><!-- Required for no empty values -->
        <br><br>

        <label for="price">Price </label>
        <input type="number" name="price"placeholder="Enter the price  " required><!-- Required for no empty values -->
        <br><br>

    
        <input type="submit" value="Save"><br> <br>
        <a href="{{ URL::previous() }}">Go Back</a><!-- On click navigate to previous page -->
    
</form>


  </form>
</body>
</html>