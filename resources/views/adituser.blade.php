@extends('welcome')
@section('content')
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif
       <br><br><br>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('userUpdate') }}"  method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{$employe->title}}">
                  </div>
                  <input type="hidden" name="uid" value="{{$employe->id}}">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Service Type</label>
                    <input type="text" class="form-control" name="service_type" id="exampleInputEmail1" value="{{$employe->service_type}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ser data</label>
                    <input type="text" class="form-control" name="ser_data" id="exampleInputEmail1" value="{{$employe->ser_data}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
@endsection