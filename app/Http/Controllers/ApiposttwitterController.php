<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posttwitter;
class ApiposttwitterController extends Controller
{
    public function index()
    {
        $post = Posttwitter::get();

        return response()->json([
            'success' => true,
            'message' => 'Post List',
            'data'    => $post
        ]);
    }
}
