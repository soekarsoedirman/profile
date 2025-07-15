<x-app-layout>
    <div class="page">
        <div class="judul">
            <h2></h2>
        </div>
        <div class="search">
            <form action="">
                <input type="text">
                <button type="submit"></button>
            </form>
        </div>
        <div class="list-kategori">
            @foreach ($postingan as $postingan)
            <div class="kategori">
                <a href=""></a>
            </div>
            @endforeach
        </div>
        <div class="blog">
            <div class="blog-page">
                @foreach ($postingan as $postingans)
                <div class="postingan">
                    <img src="" alt="">
                    <a href="">
                        <h4></h4>
                    </a>
                    <p></p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>