<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releases = Release::all();
        return view('releases')->with('releases', $releases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('layouts.modalRelease');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Release::create($request->all());
        return redirect()->route('releases-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Release  $release
     * @return \Illuminate\Http\Response
     */
    public function show(Release $release)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Release  $release
     * @return \Illuminate\Http\Response
     */
    public function edit(Release $release)
    {
        return view('layouts.modalEdit')->with('release', $release);
        // $release = Release::where('id',$id)->first();
        // if(!empty($release))
        // {
        //     return view('release-edit', ['release'=>$release]);
        // }
        // else
        // {
        //     return redirect()->route('release-index');
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Release  $release
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'data_release' => $request->data_release,
            'category' => $request->category,
            'value' => $request->value,
            'obs' => $request->obs
        ];
        Release::where('id',$id)->update($data);
        return redirect()->route('release-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Release  $release
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Release::where('id',$id)->delete();
        return redirect()->route('releases-index');
    }
}
