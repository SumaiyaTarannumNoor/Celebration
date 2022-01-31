@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Complaints</h2>
            </div>
            <div class="pull-right">
                @can('complain-create')
                <a class="btn btn-success" href="{{ route('complains.create') }}"> Create Complain</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Subject</th>
            <th>Subject</th>
            <th>Provider's Name</th> 
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($complains as $complain)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $complain->subject }}</td>
            <td>{{ $complain->provider_name }}</td>
	        <td>{{ $complain->details }}</td>
	        <td>
                <form action="{{ route('complains.destroy',$complain->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('complains.show',$complain->id) }}">Show</a>
                    @can('complain-edit')
                    <a class="btn btn-primary" href="{{ route('complains.edit',$complain->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('complain-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $complains->links() !!}

@endsection