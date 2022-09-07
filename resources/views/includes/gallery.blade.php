<main>
    <div class="container d-flex flex-wrap pt-5 mt-5">

        @foreach ($comics as $comic)
        <div class="thumb_wrapper">

            <div class="container_imgs ">
                <img src="{{ $comic -> image }}" alt="thumbnails" />
            </div>
            <h6 class="text-wrap">{{ $comic -> title}}</h6>
            <p class="text-center">({{ $comic -> type }})</p>
        </div>
        @endforeach
    </div>

    <div class=" text-uppercase d-flex align-items-center justify-content-center mt-5" id="btn-loadmore">
        <a class="text-decoration-none text-white" href="https://www.dccomics.com/newsletter">
            <span>Load More</span></a>
    </div>

    <div class="text-uppercase
        d-flex  align-items-center justify-content-center mt-4" id="current-series">
        <span>Current Series</span>
    </div>
</main>