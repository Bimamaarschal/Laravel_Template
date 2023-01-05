<!doctype html>
<html>
  @include('scr-landing/head')
  <body>
  @include('scr-landing/nav')

  @yield('konten')
    
    <footer class="footer">Scribbler is a free HTML template created exclusively for <a href="https://tympanus.net/codrops/" target="_blank" class="link link--light">Codrops</a>.</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="{{ asset('scr/js/scribbler.js') }}" ></script>

  </body>
</html>