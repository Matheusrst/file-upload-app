<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\Storage;

  class FileUploadController extends Controller
   {
    /**
     * controller da view
     *
     * @return "view"
     */
       public function showUploadForm()
       {
           return view('upload');
       }

       /**
        *controller de upload do arquivo
        *
        * @param Request $request
        * @return 
        */
       public function uploadFile(Request $request)
       {
           $request->validate([
               'file' => 'required|mimes:jpg,jpeg,png,pdf,txt|max:2048',
           ]);

           $file = $request->file('file');
           $filePath = $file->store('uploads', 'public');


           return back()->with('success', 'Arquivo enviado com sucesso!');
       }
   }
