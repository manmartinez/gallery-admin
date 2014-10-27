<?php namespace Dashboard;

class SubcategoriesController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subcategories = \Subcategory::paginate(20);
        return \View::make('dashboard.subcategories.index', compact('subcategories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subcategory = new \Subcategory();
        $categories = \Category::orderBy('name')->get();
        return \View::make('dashboard.subcategories.create', compact('subcategory','categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $subcategory = new \Subcategory(\Input::all());
        
        if( $subcategory->save() ) {
            \Session::flash('alert_success','La subcategoría se ha agregado');
            return \Redirect::route('dashboard.subcategories.index');
        }
        else {
            return \Redirect::route('dashboard.subcategories.create')->withErrors($subcategory)->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subcategory = \Subcategory::findOrFail($id);
        $categories = \Category::orderBy('name')->get();
        return \View::make('dashboard.subcategories.edit', compact('subcategory','categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $subcategory = \Subcategory::findOrFail($id);
        if( $subcategory->update(\Input::all()) ) {
            \Session::flash('alert_success','La subcategoría se ha actualizado');
            return \Redirect::route('dashboard.subcategories.index');
        }
        else {
            return \Redirect::route('dashboard.subcategories.edit', $subcategory->id)->withErrors($subcategory)->withInput();
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
        $subcategory = \Subcategory::findOrFail($id);
        $subcategory->delete();
        \Session::flash('alert_success','La subcategoría se ha eliminado');
        return \Redirect::route('dashboard.subcategories.index');
    }


}
