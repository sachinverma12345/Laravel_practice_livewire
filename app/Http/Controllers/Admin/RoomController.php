<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::latest()->get();
        return view('admin.room.list',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit = false;
        return view('admin.room.add-edit',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddRoomRequest $request)
    {
        $directory = 'room_images';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        $room = new Room();
        $room->room_id = $request->room_id;
        $room->title = $request->title;
        $room->slug = Str::slug($request->title);
        if ($request->hasFile('room_banner')) {
            $imageName = uniqid() . '_' . time() . '.' . $request->room_banner->getClientOriginalExtension();
            $request->room_banner->storeAs($directory, $imageName, 'public');
            $room->room_banner = $directory . '/' . $imageName;
        }
        $room->room_type = $request->room_type;
        $room->room_number = $request->room_number;
        $room->floor = $request->floor;
        $room->room_capacity = $request->room_capacity;
        $room->price_per_night = $request->price_per_night;
        $room->availability = $request->availability;
        $room->last_cleaned = $request->last_cleaned;
        $room->last_maintenance = $request->last_maintenance;
        $room->is_wifi = filled($request->is_wifi) ? 1 : 0;
        $room->is_car_park =filled($request->is_car_park) ? 1 : 0;
        $room->is_tv = filled($request->is_tv) ? 1 : 0;
        $room->is_fridge = filled($request->is_fridge) ? 1 : 0;
        $room->description = $request->description;
        $room->save();
        
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($directory, $imageName, 'public');
                $roomImage = new RoomImage();
                $roomImage->room_id = $room->id;
                $roomImage->path = $directory . '/' . $imageName;
                $roomImage->save();
            }
        }
        return redirect()->route('rooms.index')->with('success',"Room Created Successfylly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
       $room = Room::find($room->id);
       $edit = true;
       return view('admin.room.add-edit',compact('room', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $directory = 'room_images';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        $room = Room::where('id', $room->id)->first();
        $room->room_id = $request->room_id;
        $room->title = $request->title;
        $room->slug = Str::slug($request->title);
        if ($request->hasFile('room_banner')) {
            $imageName = uniqid() . '_' . time() . '.' . $request->room_banner->getClientOriginalExtension();
            $request->room_banner->storeAs($directory, $imageName, 'public');
            $room->room_banner = $directory . '/' . $imageName;
        }
        $room->room_type = $request->room_type;
        $room->room_number = $request->room_number;
        $room->floor = $request->floor;
        $room->room_capacity = $request->room_capacity;
        $room->price_per_night = $request->price_per_night;
        $room->availability = $request->availability;
        $room->last_cleaned = $request->last_cleaned;
        $room->last_maintenance = $request->last_maintenance;
        $room->is_wifi = filled($request->is_wifi) ? 1 : 0;
        $room->is_car_park =filled($request->is_car_park) ? 1 : 0;
        $room->is_tv = filled($request->is_tv) ? 1 : 0;
        $room->is_fridge = filled($request->is_fridge) ? 1 : 0;
        $room->description = $request->description;
        $room->save();
        
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($directory, $imageName, 'public');
                $roomImage = new RoomImage();
                $roomImage->room_id = $room->id;
                $roomImage->path = $directory . '/' . $imageName;
                $roomImage->save();
            }
        }
        return redirect()->route('rooms.index')->with('success',"Room Updated Successfylly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //dd($room);
        Room::where('id', $room->id)->delete();
        RoomImage::where('room_id', $room->id)->delete();
        return redirect()->route('rooms.index')->with('success',"Room Deleted Successfylly");
    }
}
