<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Message;

/**
 *
 */
class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages = Message::all();

        return response()->view("messages/index", compact(['messages']));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("messages/create");
    }


        /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request \\
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $message = new Message();

        $message->subject = $request->input('subject');
        $message->message = $request->input('message');

        if($message->save()) {
            return redirect(route('messages.index'));
        } else {
            $alert = "Falha ao salvar a mensagem no banco de dados";
            return redirect(route('messages.index'), compact(['alert']));
        }



    }

}
