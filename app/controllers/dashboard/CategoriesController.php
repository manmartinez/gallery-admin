<?php namespace Dashboard;

class CategoriesController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = \Category::orderBy('order')->paginate(20);

        return \View::make('dashboard.categories.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = new \Category();
        return \View::make('dashboard.categories.create', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $category = new \Category(\Input::all());
        
        if( $category->save() ) {
            \Session::flash('alert_success','La categoría se ha agregado');
            return \Redirect::route('dashboard.categories.index');
        }
        else {
            return \Redirect::route('dashboard.categories.create')->withErrors($category)->withInput();
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
        $category = \Category::findOrFail($id);
        return \View::make('dashboard.categories.edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $category = \Category::findOrFail($id);
        if( $category->update(\Input::all()) ) {
            \Session::flash('alert_success','La categoría se ha actualizado');
            return \Redirect::route('dashboard.categories.index');
        }
        else {
            return \Redirect::route('dashboard.categories.edit', $category->id)->withErrors($category)->withInput();
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
        $category = \Category::findOrFail($id);
        $category->delete();
        \Session::flash('alert_success','La categoría se ha eliminado');
        return \Redirect::route('dashboard.categories.index');
    }


}
