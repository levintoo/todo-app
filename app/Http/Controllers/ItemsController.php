<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Carbon\Carbon;

class ItemsController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Items::orderBy('created_at','DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $newItem = new items;
        $newItem->name = $request->item["name"];
        $newItem->save();

        return $newItem;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $existingitem = Items::find( $id );

        if ( $existingitem ) {
            $existingitem->completed = $request->item['completed'] ? true : false;
            $existingitem->completed_at = $request->item['completed'] ? Carbon::now() : null;
            $existingitem->save();
            return $existingitem;
        }

        return "Item not found." ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $existingitem = Items::find( $id );

        if ( $existingitem ) {
            $existingitem->delete();
            return "Item sucessfully deleted";
        }

        return "Item not found." ;
    }
}
