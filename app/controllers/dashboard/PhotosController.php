<?php namespace Dashboard;

class PhotosController extends \BaseController {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = \Photo::paginate(20);

        return \View::make('dashboard.photos.index', compact('photos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $photo = new \Photo();
        $categories = \Category::with('subcategories')->orderBy('name')->get();
        return \View::make('dashboard.photos.create', compact('photo','categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $photo = new \Photo(\Input::all());
        
        if( $photo->save() ) {
            \Session::flash('alert_success','La foto se ha agregado');
            return \Redirect::route('dashboard.photos.index');
        }
        else {
            return \Redirect::route('dashboard.photos.create')->withErrors($photo)->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $photo = \Photo::findOrFail($id);
        $categories = \Category::with('subcategories')->orderBy('name')->get();
        return \View::make('dashboard.photos.edit', compact('photo','categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $photo = \Photo::findOrFail($id);
        if( $photo->update(\Input::all()) ) {
            \Session::flash('alert_success','La foto se ha actualizado');
            return \Redirect::route('dashboard.photos.index');
        }
        else {
            return \Redirect::route('dashboard.photos.edit', $photo->id)->withErrors($photo)->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $photo = \Photo::findOrFail($id);
        $photo->delete();
        \Session::flash('alert_success','La foto se ha eliminado');
        return \Redirect::route('dashboard.photos.index');
    }
}