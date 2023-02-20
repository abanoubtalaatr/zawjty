<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ReplyOnContactUsRequest;
use App\Mail\ReplyContact;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::paginate();

        return view('dashboard.contactus.index', compact('contacts'));
    }

    public function reply(ContactUs $contactUs)
    {
        return view('dashboard.contactus.reply', compact('contactUs'));
    }

    public function postReply(ReplyOnContactUsRequest $request, $id)
    {
        $contactUs = ContactUs::find($id);
//dd($contactUs->email);
        Mail::to($contactUs->email)->send(new ReplyContact($request->body));

        $contactUs->update(['is_replied' => 1]);
        $contactUs = ContactUs::paginate();
        return $this->index();
    }

    public function destroy($id)
    {
        $contact = ContactUs::find($id)->delete();
        return $this->index();
    }
}
