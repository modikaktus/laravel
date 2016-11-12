<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negara;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Filter
        if (!empty($request->get('search'))) {
            $items = Negara::where('nama', 'LIKE', "%{$request->get('search')}%");
        } else {
            $items = Negara::where('nama', 'LIKE', '%%');
        }

        // Sort
        if (!empty($request->get('sort'))) {
            $items = $items->orderBy($request->get('sort'), 'asc');
        } else {
            $items = $items->orderBy('id', 'asc');
        }

        // Paginate
        if (!empty($request->get('offset'))) {
            $items = $items->offset($request->get('offset'));
        }

        $items = $items->take(20)->get();

        return response()->json($items);
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
        //
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
