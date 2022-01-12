<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CD</title>
    <link rel="stylesheet" type="text/css" href="/css/cd.style.css">
     <link rel="stylesheet" type="text/css" href="/css/cd.css">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 

</head>
<body>
        <h1>CD TABLE</h1>
        <table border="1">
            <thead>
              <tr>
                <th>Artist</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>

          <tbody>
             
              {{ $cd->links() }}  

            @foreach($cd as $key => $data)<!-- Build an array to create an unique key -->
            <tr>    
                <td>{{$data->Artist}}</td><!-- Storing data to unique key -->
                <td>{{$data->Title}}</td><!--  Storing data to unique key -->
                <td>{{$data->Duration}}</td><!--  Storing data to unique key -->
                <td>{{$data->price}}</td><!--  Storing data to unique key -->

                <td>
                    <button class="delete"><a style="text-decoration: none"; 
                    href="{{route('cd.delete',$data->id)}}">Delete</a></button>

                    <!-- have commented these myself:Sam 17:51 since removed it in book as well so <button class="update"><a style="text-decoration: none"; 
                    href="{{route('cd.delete',$data->id)}}">Update</a></button> -->

                </td>
                
                    
                    
            </tr>
            @endforeach <!-- End for foreachloop -->
            </tbody>



        </table>
     <h1><a style="text-decoration: none;" href="/add_cd"><button type="submit"type="submit">ADD DATA</button></a><br></h1> <!-- Creating a button which on click navigate to different page -->


<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>