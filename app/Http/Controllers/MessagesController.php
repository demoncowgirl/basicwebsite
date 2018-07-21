<?php
// this is where it belongs
namespace App\Http\Controllers;
// this is requesting from this path
use Illuminate\Http\Request;

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
        return 'SUCCESS!';


    }
}
