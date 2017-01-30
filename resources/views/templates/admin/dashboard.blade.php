@extends('templates.index')
@section('content')

<div class="container">
   <div class="col-sm-3">
   <div class="panel panel-default">
   <h3>&nbsp;&nbsp;<i class="glyphicon glyphicon-briefcase"></i>&nbsp;Toolbox</h3>
    <hr>
      <ul class="nav nav-stacked">
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-link"></i> Links</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-book"></i> Books</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
        <li><a href="#" target="ext"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
      </ul>
      <hr>
  	</div>
  	</div>

      <div class="col-sm-9">
        <h3><i class="glyphicon glyphicon-dashboard"></i> Bootply Dashboard</h3>
      <hr>  
        <div class="panel panel-default">
        <p>
             This is a responsive dashboard-style layout that uses <a href="http://www.getbootstrap.com">Bootstrap 3</a>. You can use this template as a starting point to create something more unique.
        </p>
        </div>
   </div>
</div>

@stop