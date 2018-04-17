<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{

    public function submit(ContactFormRequest $request)
    {
        $contact = Contact::create($request->all());

        $this->saveEmails($contact, $request);

        return $contact;
    }

    public function saveEmails($contact, $request) {
        // needs analysis email
        if($request->page === 'subscription') {
            $email = $this->insertEmail($contact, 'survey', 'Thanks for reaching out! Next steps...');
        // standard thank you email
        } else {
            $email = $this->insertEmail($contact, 'thanks', 'Thanks for reaching out!');
        }

        return $email;
    }

    public function insertEmail($contact, $template, $subject) {
        $email = new Mail();
        $email->contact_id = $contact->id;
        $email->template = $template;
        $email->subject = $subject;

        return $email->save();
    }
}
