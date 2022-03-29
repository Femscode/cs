<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Notification;
use App\Models\ManualFunding;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }
    public function transactiondetials($id)
    {
        $data['transaction'] = Transaction::find($id);
        return view('user.transaction', $data);
    }
    public function usernotifications() {
        $data['notifications'] = Notification::get();
        return view('user.notifications',$data);
    }
    public function manualfunding(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'bank_name' => 'required',
            'amount' => 'required'
        ]);
        ManualFunding::create([
            'account_name' => $request->name,
            'bank_name' => $request->bank_name,
            'amount' => $request->amount,
            'user_id' => Auth::user()->id
        ]);
        return 'success';
    }
    public function ticket()
    {

        return view('user.ticket');
    }

    public function createticket(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',

        ]);
        Ticket::create([
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);
        return 'success';
    }
    public function editprofile()
    {
        return view('user.editprofile');
    }
    public function cable()
    {
        return view('user.cable');
    }
    public function fetchairtime()
    {
        return view('user.fetchairtime');
    }

    public function buycable2(Request $request)
    {
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $cable_type = $request->cable_type;
        $decoder_no = $request->decoder_no;
        $user = Auth::user();
        if ($pin == $user_pin) {
            if ($balance > $amount) {

                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Cable Subscription',
                    'service_type' => 'Cable Subscription',
                    'description' => 'Cable Subscription of ' . $cable_type . ' ,decoder No:' . $decoder_no,
                    'amount' => 1000,
                ]);
                $user->balance -= 1000;
                $user->spent += 1000;
                $user->save();
                return 'transaction successful';
                //here is where the purchase will take place
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }
    public function electricity()
    {
        return view('user.electricity');
    }
    public function electricity2(Request $request)
    {
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $service_type = $request->service_type;
        $meter_type = $request->meter_type;
        $meter_no = $request->meter_no;
        $user = Auth::user();
        if ($pin == $user_pin) {
            if ($balance > $amount) {
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Electricity Subscription',
                    'service_type' => 'Electricity Bill',
                    'description' => '' . $service_type . ' payment for ' . $meter_type . ' of ' . $meter_no,
                    'amount' => 1000,
                ]);
                $user->balance -= 1000;
                $user->spent += 1000;
                $user->save();

                return 'transaction successful';
                //here is where the purchase will take place
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }

    public function exam()
    {
        return view('user.exam');
    }
    public function buypin(Request $request)
    {
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $exam_type = $request->exam_type;
        $package = $request->package;
        if ($package == 'GCE_PIN') {
            $amount = 1500;
        } elseif ($package == 'WAEC_PIN') {
            $amount = 1800;
        } else {
            $amount = 2000;
        }

        $user = Auth::user();
        if ($pin == $user_pin) {
            if ($balance > $amount) {
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Result Checker Pin',
                    'service_type' => 'Result Checker Pin',
                    'description' => '' . $exam_type . ' PIN Purchase. Package Name:' . $package,
                    'amount' => $amount,
                ]);
                $user->balance -= $amount;
                $user->spent += $amount;
                $user->save();

                return 'transaction successful';
                //here is where the purchase will take place
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }

    public function fundwallet()
    {
        return view('user.fundwallet');
    }
    public function fundwallet2(Request $request)
    {
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $service_type = $request->service_type;
        $meter_type = $request->meter_type;
        $meter_no = $request->meter_no;
        $user = Auth::user();

        if ($pin == $user_pin) {
            //code for the referral
            if ($user->spent == null) {
                $ref = User::where('referral_link', $user->referred_by)->first();
                $ref->balance += 100;
                $ref->save();
                Transaction::create([
                    'user_id' => $ref->id,
                    'title' => 'Referral Bonus',
                    'service_type' => 'Wallet Fund',
                    'description' => 'Account Funded with #100 from' . $user->name,
                    'amount' => 100,
                ]);
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Funding Wallet',
                    'service_type' => 'Wallet Fund',
                    'description' => 'Account Funded with #' . $amount,
                    'amount' => $amount,
                ]);
                $user->balance += $amount - 100;
    
                $user->save();
            } else {
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Funding Wallet',
                    'service_type' => 'Wallet Fund',
                    'description' => 'Account Funded with #' . $amount,
                    'amount' => $amount,
                ]);
                $user->balance += $amount;
    
                $user->save();
            }


          

            return 'transaction successful';
            //here is where the purchase will take place

        } else {
            return "Incorrect Pin";
        }
    }

    public function buyairtime()
    {
        $data['user'] = Auth::user();
        return view('user.buyairtime', $data);
    }
    public function buydata()
    {
        $data['user'] = Auth::user();
        return view('user.buydata', $data);
    }
    public function updatepin(Request $request)
    {
        $user = Auth::user();
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $user->pin = $pin1;
        $user->save();
    }
    public function buyairtime2(Request $request)
    {
        $phone = $request->phone;

        $network = $request->network;
        $val = substr($phone, 0, 4);

        if ($network == null) {
            if ($val == '0805' || $val == '0705' || $val == '0905'  || $val == '0807'  || $val == '0815'  || $val == '0905' || $val == '0811'  || $val == '0915') {
                $network = 'GLO';
            } else if ($val == '0802' || $val == '0902' || $val == '0701'  || $val == '0808'  || $val == '0708' || $val == '0812' || $val == '0901') {
                $network = 'AIRTEL';
            } else if ($val == '0809' || $val == '0909' || $val == '0817'  || $val == '0818') {
                $network = '9MOBILE';
            } else {
                $network = 'MTN';
            }
        }

        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;
        $user = Auth::user();

        $balance = $user->balance;
        $pin = $user->pin;
        $amount = $request->amount;
        if ($pin == $user_pin) {
            if ($balance > $amount) {

                //here is where the purchase will take place
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Airtime Purchase',
                    'service_type' => 'Buy Airtime',
                    'description' => 'Airtime purchase of ' . $network . ' network, Mobile No:' . $phone,
                    'amount' => $amount,
                ]);
                $user->balance -= $amount;
                $user->spent += $amount;
                $user->save();

                return 'transaction successful';
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }
    public function buydata2(Request $request)
    {
        $phone = $request->phone;

        $network = $request->network;
        $val = substr($phone, 0, 4);

        if ($network == null) {
            if ($val == '0805' || $val == '0705' || $val == '0905'  || $val == '0807'  || $val == '0815'  || $val == '0905' || $val == '0811'  || $val == '0915') {
                $network = 'GLO';
            } else if ($val == '0802' || $val == '0902' || $val == '0701'  || $val == '0808'  || $val == '0708' || $val == '0812' || $val == '0901') {
                $network = 'AIRTEL';
            } else if ($val == '0809' || $val == '0909' || $val == '0817'  || $val == '0818') {
                $network = '9MOBILE';
            } else {
                $network = 'MTN';
            }
        }
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $user = Auth::user();
        if ($pin == $user_pin) {
            if ($balance > $amount) {
                Transaction::create([
                    'user_id' => $user->id,
                    'title' => 'Data Purchase',
                    'service_type' => 'Buy Airtime',
                    'description' => 'Data purchase of ' . $network . ' network, Mobile No:' . $phone,
                    'amount' => $amount,
                ]);
                $user->balance -= $amount;
                $user->spent += $amount;
                $user->save();
                return 'transaction successful';
                //here is where the purchase will take place
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }
    public function checkpin(Request $request)
    {
        $pin = Auth::user()->pin;
        if ($pin == null) {
            return true;
        } else {
            return false;
        }
    }
    public function updateprofile(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->phone = $request->phone;
        if ($request->has('image')) {
            $image = $request->file('image');
            $fileName = $image->hashName();
            $image->move(public_path() . '/profilepic/', $fileName);
            $user->image = $fileName;
        } else {
            $user->image = Auth::user()->image;
        }
        $user->save();
    }
    public function landing()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function e404()
    {
        return view('frontend.404');
    }
    public function dashboard()
    {
        $user = Auth::user();
        $data['transactions'] = Transaction::where('user_id', Auth::user()->id)->latest()->get();
        if ($user->type == 0) {

            return view('user.index', $data);
        } else {
            return redirect()->route('admindashboard');
        }
    }
}
