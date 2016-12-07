@extends('layouts.master')
@section('title', 'Dashboard')
@section('css')
@endsection
@section('sidebar')
@parent
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Pasword</h3>
                </div><!-- /.box-header -->
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <!-- form start -->
                <form class="form-horizontal" role="form" method="POST" action="{{action('ChangePasswordController@updatePassword')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="form-group">
                            <label class="col-sm-2 control-label">Old Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name="old_password" required placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">New Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmation Password">
                               </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info center-block">Submit</button>
                    </div><!-- /.box-footer -->
                    <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
                    <input type="text" name="id" value="{{ Auth::user()->id }}"/>
                </form>
            </div><!-- /.box -->
            <!-- general form elements disabled -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
@section ('js')

@endsection
</body>
</html>
