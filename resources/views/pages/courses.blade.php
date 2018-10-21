@extends('layouts.app')

@section('content')
<div class="col-md-12">
        <h5>Courses</h5>
        <div class="alert alert-success" onclick="demo.showNotification1('top','center')">
            <span><b> CCNA</b> - Cisco Certified Network Associate Routing & Switching and security  </span>
        </div>
        <div class="alert alert-warning" onclick="demo.showNotification2('top','right')">
            <span><b> CCNA - </b> Cisco Certified Network professional Routing, Switching and Troubleshooting</span>
        </div>
      
    </div>


@endsection