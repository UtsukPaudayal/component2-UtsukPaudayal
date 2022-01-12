<!DOCTYPE html>
<html>
<head>
  <meta charset="utf=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="/css/book.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/add_book.css">
  <title> Add Books</title>
</head>
<body>
  <form class="form-style-7" action="/book" method="post"> <!-- Creating a form  -->

    @csrf
    <h1> Books</h1>
    <form>




      <label for="author">Author </label>
      <input type="text" name="author" placeholder="Enter Author  's full name " required>
      <br> <br>

      <label for="title">Title </label>
        <input type="text" name="title" placeholder="Enter Title " required><!-- Required for no empty values -->
        <br> <br>
        
      
      <label for="pages">Pages </label>
        <input type="number" name="pages" placeholder="Enter number of Pages "required><!-- Required for no empty values -->
        <br> <br>
      
      
        <label for="price">Price </label>
        <input type="number" name="price" placeholder="Enter Price per book " required><!-- Required for no empty values -->
        <br> <br>

             
      <input type="submit" value="Save"><br> <br>
        <a href="{{ URL::previous() }}">Go Back</a><!-- On click navigate to previous page -->
          


 
        </body>
</html>