<?php

/*
 * This file is part of the Laravel Slack package.
 *
 * (c) Gooodness Toluwanimi Kayode <gtkbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 *   This controller is to be published
 *   to App\Http\Controllers folder
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Validator;

class LaravelSlackController extends Controller
{
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     *  Shows the landing page of
     *  Laravel Slack Package
     *
    */
    public function slackPage()
    {
        return view('slack.slack');
    }

    /**
     *  Get Email, Validate and Send
     *  Invite to User
     *
    */
    public function sendSlackInvite(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'email'=>'required|email'
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->with('error','Sorry! Please enter a valid mail or you have used this mail here');
        }else{
            $email = $request->input('email');
            $this->client->request('POST',
                config('LaravelSlack.slack_team_url').'/api/users.admin.invite?t='.time().'&email='.$email.'&token='.config('LaravelSlack.slack_api_token').'&set_active=true&_attempts=1'
                );
            return redirect()->back()->with('alert','Congratulation! Your Invite has been sent successfully to your mail');
        }
    }
}
