<?php

namespace App\Repository;

use App\User;
use App\Message;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;

class ConversationRepository{

    private $user;
    private $message;
    public function __construct(User $user , Message $message){
        $this->user = $user;
        $this->message = $message;
    }

public function getConversations(int $userId){

      $conversations = $this->user->newQuery()
            ->select('firstName','id', 'avatar')
            ->where('id', '!=', $userId)
            ->get();

           return $conversations;

    }

    public function createMessage(string $content , int $from , int $to){
        return $this->message->newQuery()->create([
            'content'=> $content,
            'from_id' => $from,
            'to_id' => $to,
            'created_at'=> Carbon::now()
        ]);
    }

    public function getMessageFor(int $from , int $to):Builder{
        return $this->message->newQuery()
        ->whereRaw("((from_id = $from AND to_id = $to ) OR (from_id = $to AND to_id = $from))")
        ->orderBy('created_at', 'DESC')
        ->with([
            'from' => function($query){ return $query->select('firstName', 'id','avatar');}
        ]);

    }

        //récupère la liste du nombre de msg non lu
    public function unreadCount($userId){

        return $this->message->newQuery()
        ->where('to_id', $userId)
        ->groupBy('from_id')
        ->selectRaw('from_id, COUNT(id) as count')
        ->whereRaw('read_at IS NULL')
        ->get()
        ->pluck('count','from_id'); // créer un tableau


    }

    public function readAllFrom(int $from , int $to){
        $this->message->where('from_id',$from)->where('to_id',$to)->update(['read_at'=>Carbon::now()]);
}

}