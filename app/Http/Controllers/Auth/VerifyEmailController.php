<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }

    public function Dibya(Request $request){
        dd("bug fixed");
        dd("one more bug fixed");
        dd("second bug fixed");
        return ("Good Morning");
    }

    public function DibyaBugfix(Request $request){
        dd("Bug iin Prod");
        dd("its 2k25");
        dd("Fix message for  greenmode");
        dd("Fix message for  purple mode");
        dd("Add Another file ");
        dd("Add Another file 1");
        return ("Good Morning");
    }
}
