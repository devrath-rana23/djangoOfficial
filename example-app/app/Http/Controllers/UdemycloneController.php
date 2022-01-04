<?php

namespace App\Http\Controllers;

use App\Helpers\UdemycloneApiHelper;
use App\Http\Requests\CourseValidator;


class UdemycloneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseValidator $request)
    {
        $date_created = date('Y-m-d');
        $title = $request['title'];
        $author = $request['author'];
        $duration = $request['duration'];
        $image_url = $request['image_url'];
        // dd($date_created);
        $course_data = [
            'date_created' => $date_created,
            'title' => $title,
            'author' => $author,
            'duration' => $duration,
            'image_url' => $image_url,
        ];
        $response = UdemycloneApiHelper::createCourse($course_data);
        dd($response);
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
    public function update(CourseValidator $request, $id)
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
