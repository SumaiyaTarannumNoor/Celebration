@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Complain</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('complains.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject</strong>
                {{ $complain->subject }}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Provider's Name</strong>
                    {{ $complain->provider_name }}
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details</strong>
                {{ $complain->details }}
            </div>
        </div>
    </div>
@endsection
