<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Table;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = Notification::with('table')->get();

        return view('cashdesk.notifications', compact('notifications'));
    }

    public function create(){
        $tables = Table::all();
        return view('notification', compact('tables'));
    }

    public function store(Request $request){
        $notification = new Notification;
        $notification->table_id = $request->table_id;
        $notification->save();
        return redirect()->route('notification');
    }

    public function destroy($id)
    {
        $notification = Notification::find($id);
        $notification->delete();

        return redirect()->route('cashdesk.notifications')->with('success', 'Notification deleted successfully.');
    }
}
