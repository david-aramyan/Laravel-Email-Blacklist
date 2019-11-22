<?php

namespace Davaramyan\Blacklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Davaramyan\Blacklist\BlacklistEmail;
use Validator;

class BlacklistController extends Controller
{
    /**
     * Checks if the parameter string is valid email.
     * @param string $email
     * @return boolean
     */
    public static function validateEmail($email)
    {
        $validator = Validator::make(['email' => $email],[
            'email' => 'required|email',
        ]);
        if($validator->fails()) {
            return false;
        }
        return true;
    }

    /**
     * Adds email to blacklist
     * @param Request $request
     * @return string JSON that indicates success/failure of the request.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'email' => 'required|email|unique:blacklist_emails',
        ])->validate();

        BlacklistEmail::create($request->all());
        return response()->json(['status' => 'OK', 'message' => 'Success.']);
    }

    /**
     * Checks if email exists in blacklist
     * @param Request $request
     * @return string JSON that indicates success/failure of the request.
     */
    public function check(Request $request)
    {
        Validator::make($request->all(),[
            'email' => 'required|email',
        ])->validate();

        if(BlacklistEmail::where('email', $request->email)->first()) {
            return response()->json(['status' => 'OK', 'message' => 'Email exists.']);
        }
        return response()->json(['status' => 'OK', 'message' => 'Email doesn\'t exist.']);

    }

    /**
     * Removes email from blacklist
     * @param string $email
     * @return string JSON that indicates success/failure of the request.
     */
    public function destroy($email)
    {
        if(self::validateEmail($email)) {
            if(BlacklistEmail::where('email', $email)->delete()) {
                return response()->json(['status' => 'OK', 'message' => 'Email deleted.']);
            }
            return response()->json(['status' => 'Error', 'message' => 'Email doesn\'t exist.']);
        } else {
            return response()->json(['status' => 'Error', 'message' => 'The email field is not valid.']);
        }
    }
}
