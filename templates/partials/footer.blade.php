<footer class="content-info">
  <div class="container">
    <div class="widget-area">
      <div class="widget widget-logo">
        <img src="@asset('images/logo-full.svg')" alt="{{ get_bloginfo('name', 'display') }}">
      </div>
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </div>
  <div class="colophon">
    <div class="container">
      &copy; 2017 JohnMel Stables Inc. Website by <a href="http://adamwills.com">Adam Wills</a>
    </div>
  </div>
</footer>
