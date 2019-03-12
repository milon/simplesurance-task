<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerms = $request->get('q');

        if(! $searchTerms) {
            return response()->json([
                'error' => true,
                'message' => 'You have to specify at least one search term.',
            ], 422);
        }

        $documents = Document::searchItems(explode(',', $searchTerms))
            ->paginate($request->get('limit', 10));

        return response()->json($documents);
    }
}
