<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $document = Document::find($id);

        if($document) {
            return response()->json([
                'error' => true,
                'message' => "Document already exists for id: $id",
            ], 422);
        }

        $document = Document::create([
            'id' => $id,
            'body' => $request->body,
        ]);

        return response()->json([
            'error' => false,
            'document' => $document
        ], 201);
    }

    public function show($id)
    {
        $document = Document::findOrFail($id);

        return response()->json([
            'error' => false,
            'document' => $document,
        ]);
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return response()->json([
            'error' => false,
            'message' => "Document deleted successfully",
        ]);
    }
}
