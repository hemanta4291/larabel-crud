@extends('welcome')
@section('content')
<table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>title</th>
                      <th>service_type</th>
                      <th>ser_data</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($employs as $row)
                    <tr>
                    <td>{{$row->id}}</td>
                      <td>{{$row->title}}</td>
                      <td>{{$row->service_type}}</td>
                      <td>{{$row->ser_data}}</td>
                      <td>
                      <a href="{{url('/edituser/'.$row->id)}}" class="btn btn-secondary">Edit</a>
                      <a href="{{url('/deleteuser/'.$row->id)}}" class="btn btn-danger">delete</a>
                      </td>
                    </tr> 
                    @endforeach 
                  </tbody>
                </table>
@endsection