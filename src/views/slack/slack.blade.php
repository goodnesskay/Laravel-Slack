
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Join {{ config('LaravelSlack.slack_team_name') }} on Slack</title>
    <meta content="author" description="Goodness Toluwanimi Kayode <gtkbrain@gmail.com> | Pusher of Codes">
    <meta content="courtesy" description="Goodness Toluwanimi Kayode <gtkbrain@gmail.com> | Pusher of Codes">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="{{asset('slack-asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('slack-asset/css/bootstrap.min.css')}}">
</head>

<body>
<div class="cotn_principal">
    <div class="cont_centrar">

        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>Join {{ config('LaravelSlack.slack_team_name') }} on Slack</h2>
                        <p>{{ config('LaravelSlack.team_description') }}</p>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-1">
                                @if (session('alert'))
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <p class="text-center">{{ session('alert') }}</p>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <p class="text-center">{{ session('error') }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <br><br>
                                <form action="{{ url('slack') }}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="john@john.com">
                                    </div>
                                    <button class="btn_sign_up" onclick="cambiar_sign_up()">Request to Join</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="cont_back_info">
                <div class="cont_img_back_grey">
                    <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                </div>

            </div>

        </div>
    </div>
</div>

<script src="{{ asset('slack-asset/js/index.js') }}"></script>

</body>
</html>
