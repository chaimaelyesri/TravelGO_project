<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->simplepaginate(5);
        return view('backend.post.table_post', compact('posts'));
    }

    public function create()
    {
        return view('backend.post.create_post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/blog/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Post::create($input);


        return redirect('/admin/blog')->with('success','Post created successfully!');
    }
    public function show(Post $post)
    {
        return view('backend.activities.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('backend.post.edit_post', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/blog/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $post->update($input);

        return redirect()->route('post.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()
            ->with('success', 'Post deleted successfully');
    }


}
