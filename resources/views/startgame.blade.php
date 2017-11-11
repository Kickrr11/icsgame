<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
	<div class="container">
	{{ Form::open(array('route' => array('game.store', 'id'=>'game-form' ),'files'=>'true')) }} 
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
		    <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
						
                        <input type="submit" name="game-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Start new game">
                    </div>
                </div>
            </div>
	{!! Form::close()!!}

	</div>
</html>


