<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Event;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Transportation;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    public function index()
    {
        $guides = Guide::all();
        $tours = Tour::all();
        return view('index', [
            'guides' => $guides,
            'tours' => $tours
        ]);
    }

    public function destinations()
    {
        $destinations = Destination::all();
        return view('destinations', [
            'title' => 'Destinations',
            'destinations' => $destinations
        ]);
    }

    public function transportations()
    {
        $transportations = Transportation::all();
        return view('transportations', [
            'title' => 'Transportations',
            'transportations' => $transportations
        ]);
    }

    public function hotels()
    {
        $hotels = Hotel::all();
        return view('hotels', [
            'title' => 'Hotels',
            'hotels' => $hotels
        ]);
    }

    public function events()
    {
        $events = Event::all();
        return view('events', [
            'title' => 'Events',
            'events' => $events
        ]);
    }

    public function tours()
    {
        $tours = Tour::all();
        return view('tours', [
            'title' => 'Tours',
            'tours' => $tours
        ]);
    }

    public function dashboard()
    {
        $orders = Order::with(['user', 'tour'])->get();
        return view('dashboard', [
            'title' => 'Admin Dashboard',
            'orders' => $orders
        ]);
    }

    public function orders(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['tour_id'] = 2;

        Order::create($validatedData);

        return redirect('/payment_confirmations/1')->with('success', 'You have successfully ordered a tour!');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'payment' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('payment');

        $originName = $file->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
        $file->move(public_path('media'), $fileName);

        $order = Order::find(1);
        $order->payment = $fileName;
        $order->status = 'paid';
        $order->save();

        return redirect('/')->with('success', 'You have successfully ordered a tour!');
    }

    public function confirmOrder($id)
    {
        $order = Order::find($id);
        $order->status = 'confirmed';
        $order->save();

        return redirect()->back()->with('success', 'Order confirmed');
    }

    public function transactions($id)
    {
        $orders = Order::with(['user', 'tour'])
            ->where('user_id', $id)
            ->get();
        return view('transactions', [
            'title' => 'Transactions',
            'orders' => $orders
        ]);
    }
}
