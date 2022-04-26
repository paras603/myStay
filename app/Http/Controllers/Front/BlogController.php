<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \auth()->user();
        $blogs = Blog::where('blog_author',$user->id)->get();
        return view('front.blog.index', compact('blogs'));
    }

    public function blogs(){
        $blogs = Blog::all();
        return view('front.blog.blogs', compact('blogs'));
    }

    public function blog($id){
        $blog = Blog::where('id',$id)->first();
        $recent_blogs = Blog::latest()->take(4)->get();
        return view('front.blog.view', compact('blog', 'recent_blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $author = auth()->user();

        $image = $request->file('blog_image');
    
        $imageName = HomestayHelper::renameImageFileUpload($image);
        $image->storeAs(
            'public/uploads/blogs/',$imageName
        );
        
        Blog::create([
            'blog_title'            => $request->input('blog_title'),
            'blog_detail'           => $request->input('blog_detail'),
            'blog_image'            => $imageName,
            'blog_author'           => $author->id,
            'published_date'        => now(),
        ]);

        return redirect()->route('front.index')->with('toast.success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
