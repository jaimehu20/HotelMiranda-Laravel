<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('amenities', 'bookings')->get();
        return view('index', compact('rooms'));
    }

    public function rooms()
    {
        $rooms = Room::with('amenities', 'bookings')->get();
        return view('rooms', compact('rooms'));
    }

    public function show($id)
    {
    $room = Room::findOrFail($id);
    return view('roomDetails', compact('room'));
    }

}
