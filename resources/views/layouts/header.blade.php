

<nav class="navbar navbar-light bg-light">
  <form class="form-inline ">
    <button class="btn btn-outline-success " type="button"><a href="{{route('about')}} ">About</a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('/') ? 'active' : ''}} href="/">Home </a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('') ? 'active' : ''}}  href="posts">Post</a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('') ? 'active' : ''}} href="foods">Food</a></button>
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-outline-success" type="button">Main button</button>
  </form>
</nav>



{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">

        <li class="nav-item ">
            <a href="{{route('about')}} ">About</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{request()->is('') ? 'active' : ''}}" href="posts">Post</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link{{request()->is('') ? 'active' : ''}}" href="foods">Food</a>
        </li>
    </div>
</nav> --}}



