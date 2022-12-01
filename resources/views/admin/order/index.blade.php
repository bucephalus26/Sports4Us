@extends('layouts.adminbase')

@section('title', 'Order List')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Order List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Order List</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>User</th>
              <th>Email</th>
              <th>Amount</th>
              <th>Admin Note</th>
              <th>Status</th>
              <th style="width: 40px">Show</th>
              <th style="width: 40px">Cancel</th>
            </tr>
          </thead>
          <tbody>
            <!-- Populating Message table with loop-->
            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td><a href="{{route('admin.user.show', ['id'=>$rs->user_id])}}"
                  onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">{{$rs->user->name}}</a></td>
              <td>{{$rs->email}}</td>
              <td>£{{$rs->total}}</td>
              <td>{{$rs->note}}</td>
              <td>{{$rs->status}}</td>

              <!-- Buttons -->
              <td>
                <a href="{{route('admin.order.show', ['id'=>$rs->id])}}"  class="btn btn-block btn-success btn-sm"
                  onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                    Show
                </a>
              </td>
              <td><a href="{{route('admin.order.cancelorder', ['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to cancel?')">Cancel</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection