
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
        <a href="/backoffice/welcome">
          <i class='bx bxl-tux' ></i>
          <span class="links_name">Welcome</span>
        </a>
        <span class="tooltip">Welcome</span>
      </li>
     <li>
       <a href="{{route('bookinks.index')}}">
        <i class='bx bx-photo-album'></i>
         <span class="links_name">Bookink</span>
       </a>
       <span class="tooltip">Bookink</span>
     </li>
     <li>
       <a href="{{route('customers.index')}}">
        <i class='bx bxs-pizza' ></i>
         <span class="links_name">Customer</span>
       </a>
       <span class="tooltip">Customer</span>
     </li>
     <li>
      <a href="{{route('chefs.index')}}">
        <i class='bx bx-chat' ></i>
        <span class="links_name">Chefs</span>
      </a>
      <span class="tooltip">Chefs</span>
    </li>


    {{-- lien backoffice user --}}

    <li>
      <a href="{{route('users.index')}}">
        <i class='bx bxs-user-plus'></i>
        <span class="links_name">Users</span>
      </a>
      <span class="tooltip">Users</span>
    </li>


    <li>
      <a href={{route('footer')}}>
        <i class='bx bxs-dock-bottom'></i>
        <span class="links_name">Footer</span>
      </a>
      <span class="tooltip">Footer</span>
    </li>

     {{-- <li>
       <a href="">
        <i class='bx bxs-bug'></i>
         <span class="links_name">Footer</span>
       </a>
       <span class="tooltip">Footer</span>
     </li> --}}

     <li>
       <a href="{{route('home')}}">
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
                    {{ __("L.O.") }}
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

