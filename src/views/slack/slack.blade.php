
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Join {{ config('LaravelSlack.slack_team_name') }} on Slack</title>
    <meta content="author" description="Goodness Toluwanimi Kayode <gtkbrain@gmail.com> | Pusher of Codes">
    <meta content="courtesy" description="Goodness Toluwanimi Kayode <gtkbrain@gmail.com> | Pusher of Codes">
    <link rel="stylesheet" href="{{ asset('slack-asset/css/landio.css') }}">
</head>

<body class="bg-faded p-t-2">
<div style="margin-top: 7%" class="container">
    <img src="{{ asset('slack-asset/img/favicon.ico') }}" class="center-block" alt="">
    <h3 class="p-y-1 text-xs-center">Join <strong>{{ config('LaravelSlack.slack_team_name') }}</strong> on Slack</h3>
    <p class="text-xs-center">{{ config('LaravelSlack.team_description') }}</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <hr class="invisible">
        </div>
        <div class="col-md-8 col-xl-6 col-xl-offset-3">

            @if (session('alert'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <p style="color:dodgerblue;" class="text-xs-center">{{ session('alert') }}</p>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <p style="color:red" class="text-xs-center">{{ session('error') }}</p>
                </div>
            @endif

            <form action="{{ url('slack') }}" method="post">
                {{csrf_field()}}
                <div class="form-group has-icon-left form-control-email">
                    <label class="sr-only" for="inputEmail">Your Email</label>
                    <input type="text" class="form-control form-control-lg" id="inputEmail" placeholder="Your Email">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Request to Join</button>
            </form>

        </div>
    </div>
</div>


<hr class="invisible">
<footer class="section-footer bg-white" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="media">
                    <small class="media-body text-xs-center">
                        &copy; {{ config('LaravelSlack.slack_team_name') }} {{ date('Y') }}.
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{ asset('slack-asset/js/landio.min.js') }}"></script>
</body>
</html>
