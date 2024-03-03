@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:90px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color:cornflowerblue;">
                        <h2 style="text-align: center;">Student Information</h2>
                    </div>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Student Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Step</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Record view</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="card-body" style="text-align:right;">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-flex-sm-grow-0 " title="Add New Student" >
                            Add New
                        </a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection