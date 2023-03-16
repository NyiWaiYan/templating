@extends('admin_dashboard')
@section('admin')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
               <div class="col-sm-12">
                  <h3 class="page-title">Welcome User!</h3>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item active">Posts</li>
                  </ul>
               </div>
            </div>
         </div>
         
         <div class="row">
            <div class="col-md-12 col-lg-6">
               <div class="card card-chart">
                  <div class="card-header">
                     <div class="row align-items-center">
                        <div class="col-6">
                           <h5 class="card-title">Revenue</h5>
                        </div>
                        <div class="col-6">
                           <ul class="list-inline-group text-right mb-0 pl-0">
                              <li class="list-inline-item">
                                 <div class="form-group mb-0 amount-spent-select">
                                    <select class="form-control form-control-sm">
                                       <option>Today</option>
                                       <option>Last Week</option>
                                       <option>Last Month</option>
                                    </select>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="apexcharts-area"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 col-lg-6">
               <div class="card card-chart">
                  <div class="card-header">
                     <div class="row align-items-center">
                        <div class="col-6">
                           <h5 class="card-title">Number of Students</h5>
                        </div>
                        <div class="col-6">
                           <ul class="list-inline-group text-right mb-0 pl-0">
                              <li class="list-inline-item">
                                 <div class="form-group mb-0 amount-spent-select">
                                    <select class="form-control form-control-sm">
                                       <option>Today</option>
                                       <option>Last Week</option>
                                       <option>Last Month</option>
                                    </select>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="bar"></div>
                  </div>
               </div>
            </div>
         </div>
             <div class="card">
             <div class="card-body">
                <ul class="activity-feed">
                    @foreach ($posts as $post)
                    <li class="feed-item">
                      <div class="feed-date">{{$post->created_at}}</div>
                        <span class="feed-text"><a>{{$post->poster->username}}</a>
                            <div>
                                <p class="card-text">{{$post->intro}}</p>
                            </div>
                            <div class="tags my-3">
                                <span class="badge bg-success">{{$post->category->category_name}}</span>
                            </div>
                                <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                        </span>
                        <a href="/posts/{{$post->slug}}" class="btn btn-secondary">Read More</a>
                     </li>
                   @endforeach
                </ul>
             </div>
            </div>
          </div>
    </div>
</div>
@endsection