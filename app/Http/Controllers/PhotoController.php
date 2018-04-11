<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
    	return view('photo.index');
    }
    public function store(Request $request)
    {
    	
    	if($request->hasFile('pic'))
    	{
    		$file = $request->file('pic');
    		echo 'File Name: ', $file->getClientOriginalName(), '<br/>';
    		echo 'File Extension: ', $file->getClientOriginalExtension(), '<br/>';
    		echo 'File Size: ', $file->getSize(), '<br/>';
    		echo 'File MIME Type: ', $file->getMimeType(), '<br/>';

    		$file->move('uploads', $file->getClientOriginalName());
    	}
    	else
    	{
    		echo 'Error uploading file';
    	}
    }
}
