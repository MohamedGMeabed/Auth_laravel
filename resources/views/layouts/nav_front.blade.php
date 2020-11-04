<div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="{{ Request::segment(1)=='' ? 'active' : ''  }}"><a href="{{ url('/') }}">{{__('messages.home')}}</a></li>
              <li class="{{ Request::segment(1)=='about-us' ? 'active' : ''  }}"><a href="{{ url('/about-us') }}">{{__('messages.aboutus')}}</a></li>
              <li class="{{ Request::segment(1)=='contact-us' ? 'active' : ''  }}"><a href="{{ url('/contact-us') }}">{{__('messages.contactus')}}</a></li>
              <li class="{{ Request::segment(1)=='events' ? 'active' : ''  }}"><a href="{{ url('/events') }}">{{__('messages.event')}}</a></li>
             

            <li><a href="#">{{__('messages.course')}}<span class="label labek-info">New</span></a>
                <ul class="dropdown">
                    @foreach ($arrCourses as $objCourse)
                    <li> 
                    <a href="{{url('course_details')}}/{{$objCourse->id}}">{{$objCourse->name}}</a>
                  </li>
                  @endforeach
                </ul>

              </li>
              
               
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Book Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.html">{{__('messages.booknow')}}</a>
                <!-- Modal: Book Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>