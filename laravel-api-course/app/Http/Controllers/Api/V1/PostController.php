<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            [
                "id" => 1,
                "title" => "My First Post",
                "content" => "Lorem ipsum dolor sit amet,"
            ]
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->only("title", "body");
        return response()->json([
            "data" => [
                "id" => 1,
                "title" => $data["title"],
                "content" => $data["body"]
            ]
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return [
        //     "message" => "Post successfully",
        //    "data" => [
        //         "id" => 1,
        //         "title" => "My First Post",
        //         "content" => "Lorem ipsum dolor sit amet,"
        //     ]
        // ];

        return response()->json([
            "message" => "Post successfully",
            "data" => [
                "id" => 1,
                "title" => "My First Post",
                "content" => "Lorem ipsum dolor sit amet,"
            ]
        ])->header('Test', 'Header Value');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
