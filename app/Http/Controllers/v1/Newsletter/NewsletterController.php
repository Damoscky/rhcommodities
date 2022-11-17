<?php

namespace App\Http\Controllers\v1\Newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Helpers\ProcessAuditLog;
use Illuminate\Support\Str;
use App\Models\Enquiry;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\DB;
use App\Responser\JsonResponser;
use App\Mail\ContactNotification;
use App\Mail\AdminContactNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeNotification;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function contact(Request $request)
    {
        $validate = $this->validateRequest($request);

        if ($validate->fails()) {
            return JsonResponser::send(true, $validate->errors()->first(), $validate->errors()->all());
        }

        try {
            DB::beginTransaction();

            $createRecord = Enquiry::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            $maildata = [
                'email' => $request->email,
                'fullname' => $request->fullname,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            $adminEmail = "info@rhcommodities.com";
            $otherAdmin = [
                "adamilola@sbsc.com"
            ];

            Mail::to($request->email)->send(new ContactNotification($maildata));
            Mail::to($adminEmail)
            ->cc($otherAdmin)
            ->send(new AdminContactNotification($maildata));
            DB::commit();
            return JsonResponser::send(false, "Request submitted successfully", $createRecord, 201);
        } catch (\Throwable $error) {
            DB::rollBack();
            logger($error);
            return JsonResponser::send(true, $error->getMessage(), null, 500);
        }
    }

    public function validateRequest($request)
    {
        $rules = [
            'fullname' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required']
        ];

        $validatedData = Validator::make($request->all(), $rules);
        return $validatedData;
    }

    public function subscribe(Request $request)
    {
        $validate = $this->validateUserEntry($request);

        if ($validate->fails()) {
            return JsonResponser::send(true, $validate->errors()->first() , $validate->errors()->all());
        }

        try {
            DB::beginTransaction();
            
            $recordExist = NewsLetter::where('email', $request->email)->first();

            if($recordExist){
                return JsonResponser::send(true, "You have already subscribed to our news letter", null, 400);
            }

            $newSubscriber = NewsLetter::create([
                'email' => $request->email
            ]);

            $verification_code = Str::random(30); //Generate verification code

            $maildata = [
                'email' => $request->email,
                'verification_code' => $verification_code,
                'encodeEmail' => base64_encode($request->email),
                'subject' => "RHC|| Newsletter"
            ];

            Mail::to($request->email)->send(new SubscribeNotification($maildata));

            DB::commit();
            return JsonResponser::send(false, "User subscribed to Newsletter successfully", $newSubscriber, 200);
        } catch (\Throwable $error) {
            DB::rollBack();
            logger($error);
            return JsonResponser::send(true, $error->getMessage(), null, 500);
        }
    }

    public function validateUserEntry($request)
    {
        $rules =  [
            'email' => 'required|email'
        ];

        $validatedData = Validator::make($request->all(), $rules);
        return $validatedData;
    }
}
