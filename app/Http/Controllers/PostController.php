<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewany', Post::class);
        $posts = Post::all();

        return view('posts.index', [
            'posts'->$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Pour afficher le formulaire de création;
        $this->authorize('create', Post::class);
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pour stcker un poste nouvellement créé
        $this->authorize('create', Post::class);
        $validated = $request->validate([
            //'name'->'required|max:255',
            //'content'->'required|max:1000'
        ]);
        $validated['user_id']=1;
        $post =Post::create($validated);
        return redirect()->route('post.show',['post'-> $post->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Pour afficher un poste

        $this->authorize('view', $post);

        return view('posts.show', [
            'posts'->$posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //Afficher le formulaire d'édition
        $this->authorize('update', $post);
        return view('posts.edit', [
            'posts'->$posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Pour modifier
        $this->authorize('update', Post::class);
        $validated = $request->validate([
            //'name'->'required|max:255',
            //'content'->'required|max:1000'
        ]);
        return redirect()-›route( 'post.show', ['post' -> $post->$id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //Pour supprimer
        $post->delete();
        return redirect()->route('post.index');

    }
}
