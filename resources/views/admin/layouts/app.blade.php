
<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.headerlinks')

  <body class="m-0 font-sans text-base antialiased font-normal text-left leading-default dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">
    <!-- sidenav -->

    @include('admin.includes.sidebar')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->

      @include('admin.includes.nav')
      

      @yield('content')
    </main>

    


    @include('admin.includes.fixplugin')

   
  </body>
  @include('admin.includes.footerlinks')
</html>
