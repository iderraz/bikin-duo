
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Back Office</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="{{route('dashboard')}}">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
         <li>
            <a href="{{route('about.index')}}">
              <i class='bx bxl-tux' ></i>
              <span class="links_name">About</span>
            </a>
            <span class="tooltip">About</span>
          </li>
         <li>
           <a href="{{route('contact.index')}}">
            <i class='bx bx-photo-album'></i>
             <span class="links_name">Contact</span>
           </a>
           <span class="tooltip">Contact</span>
         </li>

         <li>
           <a href="{{route('service.index')}}">
            <i class='bx bxs-pizza' ></i>
             <span class="links_name">Services</span>
           </a>
           <span class="tooltip">Services</span>
         </li>
         
        <li>
          <a href="{{route('team.index')}}">
            <i class='bx bx-chat' ></i>
            <span class="links_name">Team</span>
          </a>
          <span class="tooltip">Team</span>
        </li>
    
    
    
        <li>
          <a href="{{route('testimonial.index')}}">
            <i class='bx bxs-user-plus'></i>
            <span class="links_name">Testimonial</span>
          </a>
          <span class="tooltip">Testimonial</span>
        </li>

        <li>
          <a href="{{route('user.index')}}">
            <i class='bx bxs-devices'></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>

      
        </li>
   
   
        <li>

       </li>

        <li>
          <a href="{{route('titre.index')}}">
            <i class='bx bxs-component' ></i>
            <span class="links_name">Titres</span>
          </a>
          <span class="tooltip">Titres</span>
        </li>

        <li>
          <a href="{{route('navbar.index')}}">
            <i class='bx bxs-face' ></i>
            <span class="links_name">Navbar</span>
          </a>
          <span class="tooltip">Navbar</span>
        </li>

        <li>
          <a href="{{route('section2.index')}}">
            <i class='bx bx-navigation' ></i>
            <span class="links_name">Section 2</span>
          </a>
          <span class="tooltip">Section 2</span>
        </li>

        <li>
          <a href="{{route('portfolio.index')}}">
            <i class='bx bx-joystick' ></i>
            <span class="links_name">Portfolio</span>
          </a>
          <span class="tooltip">Portfolio</span>
        </li>

        <li>
          <a href="{{route('footer.index')}}">
            <i class='bx bxl-dribbble' ></i>
            <span class="links_name">Footer</span>
          </a>
          <span class="tooltip">Footer</span>
        </li>

        <li>
          <a href="{{route('footerBottom.index')}}">
            <i class='bx bx-wrench' ></i>
            <span class="links_name">Footer Bottom</span>
          </a>
          <span class="tooltip">Footer Bottom</span>
        </li>
    
        {{-- <li>
          <a href={{route('footer')}}>
            <i class='bx bxs-dock-bottom'></i>
            <span class="links_name">Footer</span>
          </a>
          <span class="tooltip">Footer</span>
        </li> --}}
    
         {{-- <li>
           <a href="">
            <i class='bx bxs-bug'></i>
             <span class="links_name">Footer</span>
           </a>
           <span class="tooltip">Footer</span>
         </li> --}}
    
         <li>
           <a href="{{route('main')}}">
            <i class='bx bx-left-arrow-alt' ></i>
              <span class="links_name">Retour Front</span>
           </a>
           <span class="tooltip">Retour Front</span>
         </li>
    
    
         <li>
            <a href="#">
                <form method="POST" class="nav-link py-3 px-0 pl-5 rounded" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __("Off") }}
                    </x-dropdown-link>
                </form>
            </a>
    
            <span class="tooltip">Log Out</span>
        </li>
        </ul>
      </div>
     
      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
    
      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });
    
      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });
    
      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
       }
      }
      </script>