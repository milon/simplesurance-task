<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->request->add([
            'id' => 'id'
        ]);

        $request->validate([
            'id' => 'required|unique:documents,id',
            'body' => 'required',
        ]);

        $document = Document::create([
            'id' => $id,
            'body' => $request->body,
        ]);
    }

    public function show()
    {

    }

    public function destroy()
    {

    }
}
