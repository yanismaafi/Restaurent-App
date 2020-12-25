<!DOCTYPE html>

<html lang="fr">

@include('includes.head')

<body>

      <!-- ======= Top Bar ======= -->
      @include('includes.topBar')

      <!-- ======= Header ======= -->
      @include('includes.header')

      <!-- ======= Hero Section ======= -->
      @include('includes.hero')
    
      <main id="main">

        @yield('content')

      </main>

      <!-- ======= Footer ======= -->
      @include('includes.footer')
      <!-- ======= Script ======= -->
      @include('includes.script')
</body>
</html>