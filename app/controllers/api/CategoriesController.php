<?php namespace Api;

class CategoriesController extends \BaseController {

    public function index() {
        $categories = \Category::orderBy('name')->get();
        return \Response::json($categories);
    }

    public function show($id) {
        $category = \Category::with('photos')->with('subcategories')->findOrFail($id);
        return \Response::json($category);
    }
}