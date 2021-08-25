<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {


        if (isset($request['q'])) {

            $q = $request['q'];

            return view('search.index', [
                'recipes' => Recipe::where('title', 'LIKE', '%' . $q . '%')
                    ->orWhere('body', 'LIKE', '%' . $q . '%')
                    ->latest()
                    ->with('category')
                    ->paginate(20)
            ]);
        }
    }
}
