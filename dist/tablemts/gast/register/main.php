 <!-- ================= Main Started ==================== -->






 <main class="py-20 overflow-hidden">
    <div class="font-[sans-serif] text-[#333] mt-4 p-4 relative">
        <div class="max-w-md w-full mx-auto relative z-10">
          <div class="text-center mb-8">
          </div>
          <div class="border border-gray-300 bg-white rounded-md p-8">
            <form class="w-full" method="POST" id='registerForm'>
              <div class="mb-6">
                <h3 class="text-2xl font-extrabold">Ein Konto erstellen</h3>
              </div>
              <div class="space-y-6">
                <div>
                  <label class="text-sm mb-2 block">Name</label>
                  <div class="relative flex items-center">
                    <input id="name" name="name" type="text" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Name eingeben" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                      <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                      <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                    </svg>
                  </div>
                  <p id="u_error" class="mt-1 ml-2 text-red-500"></p>
                </div>
                <div>
                  <label class="text-sm mb-2 block">E-Mail-Adresse</label>
                  <div class="relative flex items-center">
                    <input name="email" id="email" type="email" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="E-Mail eingeben" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 682.667 682.667">
                      <defs>
                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                          <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                        </clipPath>
                      </defs>
                      <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                        <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" data-original="#000000"></path>
                        <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" data-original="#000000"></path>
                      </g>
                    </svg>
                  </div>
                  <p id="e_error" class="mt-1 ml-2 text-red-500"></p>
                </div>
                <div>
                  <label class="text-sm mb-2 block">Passwort</label>
                  <div class="relative flex items-center">
                    <input id="password" name="password" type="password" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Passwort eingeben" />
                    <svg id="switch-pass" xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-4 h-4 absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                      <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                    </svg>
                  </div>
                  <p id="p_error" class="mt-1 ml-2 text-red-500"></p>
                </div>
                <div class="flex items-center">
                  <input id="accept-me" name="accept-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                  <label for="accept-me" class="ml-3 block text-sm" id="accept-me-text">
                    Ich akzeptiere die <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1 " id="accept-me-a"> Geschäftsbedingungen</a>
                  </label>
                </div>
              </div>
              <div class="!mt-10">
                <button type="submit" name="send" id="register_btn" class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                  Konto erstellen
                </button>
              </div>
              <p class="text-sm mt-6 text-center">Bereits ein Konto? <a href="login.php" class="text-blue-600 font-semibold hover:underline ml-1">Hier anmelden</a></p>
            </form>
          </div>
        </div>
        <img src="https://readymadeui.com/bg-effect.svg" class="absolute inset-0 w-full h-full z-0 opacity-40" />
      </div>
  </main>

  <!-- ================= Main Ended ==================== -->
   <script src="js/register/register.js"></script>