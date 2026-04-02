<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $limit = $request->get('limit', 50);

        return response()->json($this->postService->list($limit));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        return response()->json($this->postService->create($data), 201);
    }

    public function show($id)
    {
        return response()->json($this->postService->detail($id));
    }

    public function update(Request $request, $id)
    {
        return response()->json(
            $this->postService->update($id, $request->all())
        );
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
        return response()->json(null, 204);
    }
}
