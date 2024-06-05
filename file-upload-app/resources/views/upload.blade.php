<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Upload de Arquivos</title>
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
   <body>
       <div class="container">
           <h1>Upload de Arquivos</h1>

           @if (session('success'))
               <div class="alert alert-success">
                   {{ session('success') }}
               </div>
           @endif

           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif

           <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="file">Escolha um arquivo</label>
                   <input type="file" name="file" id="file" class="form-control">
               </div>
               <button type="submit" class="btn btn-primary">Enviar</button>
           </form>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
   </body>
   </html>
