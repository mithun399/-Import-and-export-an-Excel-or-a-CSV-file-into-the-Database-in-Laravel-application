<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>importExportView</title>
  </head>
  <body>
   
    <div class="row d-flex justify-content-center mt-100">   
    <div class="col-md-8">
            
    <div class="card">
    <div class="card-header">
    <h5>Import And Export File</h5>
    </div>
    <div class="card-block">
    <form action="import" method="POST" enctype="multipart/form-data" class="dropzone dz-clickable">
    @csrf
    <div class="dz-default dz-message"><span>Drop files here to upload</span>
    <input type="file" name="file">
    </div>

    <div class="text-center m-t-20">
    <button class="btn btn-primary">Import File</button>
    <a href="export" class="btn btn-primary">Export File</a>
    </div>

    </form>

    </div>
    </div>   
    </div>   
    </div>
 
  </body>
</html>