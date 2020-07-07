<?php

namespace App\Http\Controllers;

use App\url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {

        $mainUrl= url::where('shorten',$url)->first();
        
if(is_null($mainUrl)){
    $notFound="not ";
    return view('home',compact('notFound'));
}
else{


            return view('viewUrl',compact('mainUrl'));
}
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $url = new url;
       $url->url= $request->url;
       $url->shorten= $request->shorten;
       $url->save();
       return view('success',compact('url'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(url $url)
    {
        //
    }
}
