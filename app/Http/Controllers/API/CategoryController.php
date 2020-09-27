<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller {

    protected $model;

    public function __construct(Categories $model) {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $categories = $this->model::all();

        return response()->json([
            'categories' => $categories,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int      $id
     *
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
