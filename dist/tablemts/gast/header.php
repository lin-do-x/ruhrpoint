  <!-- ================= Header Started ==================== -->
  <div id="Home"></div>
  <nav class=" fixed w-full z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">

      <div class="flex items-center rounded  animate__animated animate__fadeInLeft">
        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-14 rounded-full" src="images/menu-logo1.png" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-[rgba(2,37,75,1)] rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">

          <ul class="py-2" aria-labelledby="user-menu-button">

            <li>
              <a href="http://localhost/~kali/ruhr_point/dist/login.php" class="flex gap-1 px-4 py-2 text-sm text-gray-100 hover:bg-gray-500 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-login">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                  <path d="M21 12h-13l3 -3" />
                  <path d="M11 15l-3 -3" />
                </svg><span>Anmelden</span></a>
            </li>
            <li>
              <a href="http://localhost/~kali/ruhr_point/dist/register.php" class="flex gap-1 px-4 py-2 text-sm text-gray-100 hover:bg-gray-500 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-down">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                  <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.342 0 .674 .043 .99 .124" />
                  <path d="M19 16v6" />
                  <path d="M22 19l-3 3l-3 -3" />
                </svg><span>Registrierung</span></a>
            </li>
          </ul>
        </div>

      </div>


      <button id="open-drawer" class="p-2   rounded  animate__animated animate__fadeInRight hover:bg-blue-900">
        <svg class="w-5 h-5 " aria-hidden="flase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>


    </div>

  </nav>


  <!-- ================= Header Ended ==================== -->