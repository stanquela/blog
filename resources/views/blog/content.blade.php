@extends('layouts/app')
@section('title', 'BLOG')
@section('content')
<body>
<div class="header">
  <h2>Blog Name</h2>
</div>
<center>
        @if(Session::has('delete_message'))
            <p class="alert alert-info">{{ Session::get('delete_message') }}</p>
        @elseif(Session::has('message'))
            <p class="alert alert-danger">{{Session::get('message')}}</p>
        @endif  
</center>
@foreach($wp['blog_data'] as $blog)
    <div class="card">
      <h2>{{ $blog['title'] }}</h2>
      <h5>Date created: {{ $blog['created_at'] }}</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>{{ $blog['text'] }}</p>
      <a href=" {{ route('showBlog', $blog->id) }} ">Read more...</a>
    </div>
@endforeach




<!--
THIS IS JUST A TEMPLATE FOR BLOG POSTS
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

-->
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
@endsection


