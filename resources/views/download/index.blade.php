@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Choose yout category</h4>
                       
                    </div>
                    <div class="content all-icons">
                        <div class="row">
                            <a href="/download/music">
                          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="font-icon-detail"><i class="pe-7s-album"></i>
                              <input type="text" value="Music">
                            </div>
                            
                          </div>
                        </a>
                          <a href="/download/movies">
                          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="font-icon-detail"><i class="pe-7s-video"></i>
                              <input type="text" value="Movies">
                            </div>
                          
                          </div>
                        </a>
                          <a href="/download/education">
                          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="font-icon-detail"><i class="pe-7s-study"></i>
                              <input type="text" value="Education">
                            </div>
                         
                          </div>
                        </a>
                          <a href="/download/series">
                          <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="font-icon-detail"><i class="pe-7s-film"></i>
                              <input type="text" value="Series">
                            </div>
                       
                          </div>
                        </a>
                       
                          
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection