<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function table(Request $request){
        if ($group_id = $request->get('group_id')){
            $contact  = Contact::where('group_id',$group_id)->paginate(7);
        }else{
            $contact = Contact::paginate(7);
        }

        return view('admin.contact.TableContact',compact('contact'));
    }
    public function getCreate(){
        return view('admin.contact.CreateContact');
    }
}
