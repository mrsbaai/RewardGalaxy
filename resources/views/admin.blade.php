
@extends('layouts.app')
<title>Administration</title>

@section('content')


    <div class="container width-fix col-sm-6">
        <div class="jumbotron welcome-texture">
            <div class="row">

                <div class="row">

                    <div class="col-md-12">
                        {{ Form::open(array('action' => 'adminController@addReward', 'id' => 'add-reward-form'))}}
                        <h3>Add Reward</h3>

                        <div class="form-group">
                            <input id="title" name="title"  placeholder="title" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <input id="tag" name="tag"  placeholder="tag (rewardgalaxy.com/[TAG]" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <textarea id="short_description" name="short_description" placeholder="short_description" type="text" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea id="long_description" name="long_description" placeholder="long_description" type="text" class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                            <input id="coins" name="coins"  placeholder="coins" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <input id="thumbnail" name="thumbnail"  placeholder="thumbnail url for download" type="text" class="form-control">
                        </div>





                        <div class="col-md-12 text-center">
                            <input type="submit" class="btn btn-primary btn-send" value="Add">
                        </div>


                        {{ Form::close() }}


                    </div>





                    <div class="col-xs-12" style="height:30px;"></div>

                </div>



            </div>

        </div>

    </div>



@stop



@section('bottom')

    <script src="../js/account.validator.js"></script>


    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>

@stop
