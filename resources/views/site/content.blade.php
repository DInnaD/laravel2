


          
        

<!--Service-->

@if(isset($portfolios) && is_object($portfolios))
      
<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
    
      <h2>Portfolio</h2>
      

    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters tags  -->
  <div class="portfolio"> 
   @if(isset($tags))
       
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
          @foreach($tags as $tag)
              <li><a class="" href="#" data-filter=".{{ $tag }}">
          <h5>{{ $tag }}</h5>
          </a></li>
          @endforeach
          
        
        
      </ul>
    </div>
    <!--/Portfolio Filters --> 
  @endif  
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      @foreach($portfolios as $item)
            <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{ $item->filter }} isotope-item">
        <div class="portfolio_img"> 
        {!! Html::image('assets/img/'.$item->images,$item->name) !!}
        </div>        
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">{{ $item->name }}</h4>
          </div>
        </div>
        </div>
      <!--/Portfolio Item -->
      @endforeach
      
      
      
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 
     
    @endif



@if(isset($peoples) && is_object($peoples))
<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    
      
      <h2>Team</h2>
      
      
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">

    @foreach($peoples as $people)
    
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-0{{ ($people->id*3 + 3) }}s">
        
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          {!! Html::image('assets/img/'.$people->images,$people->name) !!}
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-0{{ ($people->id*3 + 3) }}s">{{$people->name}}</h3>
        <span class="wow fadeInDown delay-0{{ ($people->id*3 + 3) }}s">{{$people->position}}</span>
        <p class="wow fadeInDown delay-0{{ ($people->id*3 + 3) }}s">{{$people->text}}</p>
      </div>

  @endforeach
@endif

      
      
    </div>
  </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">   
         <div class="contact_info">
                            <div class="detail">
                                <h4>UNIQUE Infoway</h4>
                                <p>104, Some street, NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+1 234 567890</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>support@sitename.com</p>
                            </div> 
                        </div>
              
              
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
             <form method="POST" action="{{ route('home') }}" >
            {{csrf_field()}}
              <input class="input-text" type="text" name="name" placeholder="Your Name *" >
              <input class="input-text" type="text" name="email" placeholder="Your E-mail *" >
              <textarea name="text" class="input-text text-area" cols="0" rows="0" placeholder="Your Message *"></textarea>
             <input class="input-btn" type="submit" value="send message">
             </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2014,    Template by <a href="http://webthemez.com">WebThemez.com</a>. </span> </div>


  </div>
</footer>
