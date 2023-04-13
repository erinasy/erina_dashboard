<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomsModel;
use App\Models\TypeRoomModel;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rooms = RoomsModel::all();
        // return view('room.index',['room'=>$rooms]);
        $rooms = RoomsModel::with('dt_type')->get();
        return view('room.index',['room'=>$rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = TypeRoomModel::get();
        return view('room.create',compact(['type']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //add data
            // RoomsModel::create($request->all());
            // if true, redirect to index
            // return redirect()->route('room.index')
            // ->with('success', 'Add data success!');
            $data = $this->validate($request, [
                'lokasi_rooms' => 'required',
                'no_rooms' => 'required',
                'typerooms_id' => 'required',
                'harga_rooms' => 'required',
                'keterangan' => 'required'
            ]);
    
            RoomsModel::create($data);
    
    
           // if true, redirect to index
            return redirect()->route('room.index')
            ->with('success', 'Add data success!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rooms = RoomsModel::find($id);
        return view('room.show',['room'=>$rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomsModel $room)
    {
        $type = TypeRoomModel::get();
        return view('room.edit',compact(['type','room']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomsModel $room)
    {
        $data=$request->only([
             'lokasi_rooms',
             'no_rooms',
             'typeRooms_id',
             'harga_rooms',
             'keterangan'
         ]);
         $room->update($data);
         return redirect()->route('room.index')->with('success', 'Data berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms = RoomsModel::find($id);
        $rooms->delete();
        return redirect()->route('room.index');
    }
}
