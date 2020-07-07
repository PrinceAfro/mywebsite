    <nav class="navbar navbar-inverse">
  <a class="navbar-brand" href="/">myWebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbar">

        <ul class=" nav navbar-nav ">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>    

        </ul>
        
    </div>
</nav>