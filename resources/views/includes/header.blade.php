<header>
<nav class="container d-flex align-items-center justify-content-between">
      <div>
        <a href="https://www.dccomics.com/"
          ><img id="logo" src="../assets/img/dc-logo.png" alt="dclogo"
        /></a>
      </div>
      <ul class="d-flex me-5 pe-5">
        <li v-for="(link, index) in navBar" :key="index">
          <a :href="link.url">{{ link.text }}</a>
        </li>
      </ul>
    </nav>
</header>