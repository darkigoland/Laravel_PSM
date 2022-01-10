@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Project list</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Proposal</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($approval as $approval)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $approval->stud_id }}</td>
            <td>{{ $approval->stud_name }}</td>
            <td>{{ $approval->stud_prposal }}</td>
            <td>{{ $approval->proposal_status }}</td>
            <td>
                <form action="{{ route('approval.destroy',$approval->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('approval.show',$approval->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('approval.update',$approval->id) }}">Approve</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $approval->links() !!}
    @endsection 