<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use function PHPUnit\Framework\stringContains;

class PostController extends Controller
{

    public function index()
    {
//        $posts = auth()->user()->posts;
//
//        return response()->json([
//            'success' => true,
//            'data' => $posts
//        ]);

        $post = Post::all();
        return view('home')->with(compact('post'));
    }

//    public function show($id)
//    {
//        $post = auth()->user()->posts()->find($id);
//
//        if (!$post) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Post not found '
//            ], 400);
//        }
//
//        return response()->json([
//            'success' => true,
//            'data' => $post->toArray()
//        ], 400);
//    }

    public function store(Request $request)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'description' => 'required'
//        ]);
//
//        $post = new Post();
//        $post->title = $request->title;
//        $post->description = $request->description;
//
//        if (auth()->user()->posts()->save($post))
//
//            return response()->json([
//                'success' => true,
//                'data' => $post->toArray()
//            ]);
//        else
//            return response()->json([
//                'success' => false,
//                'message' => 'Post not added'
//            ], 500);


        $data = $request->all();

//        $validator = Validator::make($data, [
//            'name' => 'required|max:255',
//            'description' => 'required|max:255',
//            'cost' => 'required'
//        ]);

//        if ($validator->fails()) {
//            return response(['error' => $validator->errors(), 'Validation Error']);
//        }
        $post = Post::create($data);

        return response(['post' => $post, 'message' => 'Created successfully'], 201);

    }

//    public function update(Request $request, $id)
//    {
//        $post = auth()->user()->posts()->find($id);
//
//        if (!$post) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Post not found'
//            ], 400);
//        }
//
//        $updated = $post->fill($request->all())->save();
//
//        if ($updated)
//            return response()->json([
//                'success' => true
//            ]);
//        else
//            return response()->json([
//                'success' => false,
//                'message' => 'Post can not be updated'
//            ], 500);
//    }

//    public function destroy($id)
//    {
//        $post = auth()->user()->posts()->find($id);
//
//        if (!$post) {
//            return response()->json([
//                'success' => false,
//                'message' => 'Post not found'
//            ], 400);
//        }
//
//        if ($post->delete()) {
//            return response()->json([
//                'success' => true
//            ]);
//        } else {
//            return response()->json([
//                'success' => false,
//                'message' => 'Post can not be deleted'
//            ], 500);
//        }
//    }
}
