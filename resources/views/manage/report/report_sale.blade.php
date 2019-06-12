@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Danh sách khách hàng</h1>
      </div>
      <!-- <div class="column">
        <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Tạo báo cáo mới</a>
      </div> -->
    </div>
    <hr class="m-t-0">

<div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>Date Created</th>
                <th>Khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                
                
                <th>Người chăm sóc</th>
                
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($getdata as $p)
                <tr>
                  <th>{{$p->DateCreated}}</th>
                  <td>{{$p->Customer}}</td>
                  <td>{{$p->Email}}</td>
                  <td>{{$p->Number}}</td>
                  
                  <td>{{$p->Caregiver}}</td>
                  
                  <td class="has-text-right"></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->


  </div> <!-- end of .flex-container -->

@endsection
