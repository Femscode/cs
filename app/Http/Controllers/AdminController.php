<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Notification;
use App\Models\ManualFunding;
use App\Models\Ticket;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard() {
        $data['notifications'] = Notification::latest()->get();
        $data['manuals'] = ManualFunding::latest()->get();
        $data['tickets'] = Ticket::latest()->get();
        $data['users'] = User::latest()->get();
        $data['pusers'] = User::latest()->take(4)->get();
        $data['total_balance'] = User::sum('balance');
        $data['total_spent'] = User::sum('spent');
        
        return view('admin.index', $data);
    }
    public function allusers() {
        $data['users'] = User::get();
        return view('admin.users',$data);
    }
    public function viewtransaction($id) {
$data['transactions'] = Transaction::where('user_id',$id)->latest()->get();
return view('admin.usertransaction',$data);
    }
    public function notifications() {
        $notifications = Notification::latest()->get();
        return view('admin.notifications');
    }
    public function createnotification(Request $request) {
        $this->validate($request,[
            'title' => 'required',
            
        ]);
        $notification =  Notification::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return $notification;
    }
    public function deletenotification(Request $request) {
        $id = $request->id;
        $notification = Notification::find($id);
        $notification->delete();
        return 'notification deleted';
    }

    public function deleteticket(Request $request) {
        $id = $request->id;
        $notification = Ticket::find($id);
        $notification->delete();
        return 'notification deleted';
    }

    public function deletemanual(Request $request) {
        $id = $request->id;
        $notification = ManualFunding::find($id);
        $notification->delete();
        return 'manual fundiug deleted';
    }

    
}
