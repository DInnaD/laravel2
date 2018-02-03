

  <div class="container">
 
    <div class="header_box">
      <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a></div>
      

      <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              
            

            <li><a href="{{ url('/admin/pages') }}" class="scroll-link">Pages</a></li>
            <li><a href="{{ url('/admin/portfolios') }}" class="scroll-link">Portfolios</a></li>
            <li><a href="{{ url('/admin/services') }}" class="scroll-link">Services</a></li>
            <li><a href="{{ url('/admin/peoples') }}" class="scroll-link">Peoples</a></li>
            
              
              
            </ul>
      </div>
     </nav>

      
      
    </div>
  </div>
