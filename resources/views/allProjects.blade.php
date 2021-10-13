<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 my-3">
 
     <h2>All Projects</h2>
        <table class="table table-striped table-bordered ">
            <thead class="thead">
                <tr >
                    <th> Id </th>
                    <th> Title </th>
                    <th> Start Date</th>
                    <th> END Date</th>
                    <th> Action </th>
                </tr>
            </thead>
            @foreach($projects as $project)
            <tbody>
                <tr>
                    <td>{{ $project->id}}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>

                    <td>
                        <a href="{{route('projects.show',['project'=>$project->id])}}" class="btn btn-info">View</a>
                        <form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="POST" class="d-inline">
                            @csrf                        
                            @method('DELETE')                          
                        
                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                        Delete
                        </button></form>
                    </td>

                </tr>
            </tbody>
            @endforeach
        </table>
        </div>           
    </div>

</body>
</html>