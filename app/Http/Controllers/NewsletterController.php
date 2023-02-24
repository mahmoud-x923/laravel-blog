<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email-newsletter' => 'email|required']);

        try {
            $newsletter->subscribe(request('email-newsletter'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email-newsletter' => "Sorry, this email can not be added to our newsletter list."
            ])->redirectTo('/#newsletter');
        }

        return redirect('/#newsletter')->with('success', 'You are niw signed up for our newsletter');
    }
}
