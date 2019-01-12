<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreMessage;
use Illuminate\Support\Facades\Auth;
use App\Repository\ConversationRepository;
use App\Notifications\MessageReceived;

class ConversationsController extends Controller
{

       private $r;
       private $auth;
    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth)
    {
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }
    public function index(){


        return view('conversations/index',[
            'users' => $this->r->getConversations($this->auth->user()->id),
            'unread' => $this->r->unreadCount($this->auth->user()->id)
        ]);
    }

    public function show(User $user){
        $messages = $this->r->getMessageFor($this->auth->user()->id, $user->id)->paginate(7);
        $unread = $this->r->unreadCount($this->auth->user()->id);
        if(isset($unread[$user->id])){
            $this->r->readAllFrom($user->id , $this->auth->user()->id);
           unset( $unread[$user->id]);
        }

        return view('conversations/show',[
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages'=> $messages,
            'unread' => $unread
            //'messages'=> $this->r->getMessageFor($this->auth->user()->id, $user->id)->paginate(2)->reverse()
        ]);

    }

    public function store(User $user, StoreMessage $request){
            $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );
       // $user->notify(new MessageReceived($message));
        return redirect(route('conversations.show',['id' => $user->id]));
    }
}
