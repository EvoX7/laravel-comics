<header>
  <nav>
    <div class="me-5 mt-2">
      <a href="https://www.dccomics.com/"><img id="logo" src="../assets/img/dc-logo.png" alt="dclogo" /></a>
    </div>
    <ul class="d-flex me-5 pe-5 links">
      @foreach ($links as $link)
      <li><a href="{{ $link -> url}}"> {{ $link -> text }}
        </a>
      </li>
      @endforeach
    </ul>
  </nav>
</header>
