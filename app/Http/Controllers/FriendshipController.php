<?php

namespace App\Http\Controllers;

use App\User;
use App\Friendship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class FriendshipController extends Controller
{

    public function sendFriendRequest(Guard $auth, $id, Request $request){
        $requester = $auth->user();
        $user = User::findOrFail($id);
        $recipient = $user;

        if($request->has('send')){
            $requester->befriend($recipient);
        }else if ($request->has('cancel')){
            $request = Friendship::where('sender_id', '=', $requester->id)->delete();
        }

        return view('users.show', compact('user'));
    }

    public function showRequests(Guard $auth){
        $user = $auth->user();
        $friendRequest = $user->getPendingFriendships();
        // dd($friendRequest->get());
        $collection = collect($friendRequest);
        dd($collection->get('0')->get('attributes'));
        $users = User::where('id', '=', $friendRequest->sender_id)->get();
        dd($users);
        // $friendRequestUser = Friendship::where('sender_id', '=', '');
        // return view('requests.index', compact('friendRequest'));
    }
}
