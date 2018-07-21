<?php
// this is where it belongs
namespace App\Http\Controllers;
// this is requesting from this path
use Illuminate\Http\Request;
// to use the Message model
use App\Message;

// anything available in the core Controller can be used
// such as DispatchesJobs, ValidatesRequests and AuthorizesRequests
class MessagesController extends Controller
{
    // public allows function to be accessed outside of the class
    // submit is the function in MessagesController@submit in routes
    // Request is from Illuminate\Http|Request ^
    // and there is a php variable called $request
    public function submit(Request $request){
      // from this class^^ will use the validate method to do something with the $request variable coming from Http
      $this->validate($request, [
        // validate that the name is entered
        // more than one rule can be set up
        'name' => 'required',
        'email' => 'required'
      ]);
        // create a message variable and error message
        // uses Eloquent database library, although SQL statements can be used here
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // save new Message
        $message->save();
        // redirect back to homepage after submit/save
        return redirect('/')->with('success','Message Sent');
    }
        public function getMessages(){
          //this will get all of the messages from the variable
          // by the model Message, and add them to a variable
          $messages = Message::all();

          // i need to figure this out exactly
          return view('messages')->with('messages', $messages);
        }
}
