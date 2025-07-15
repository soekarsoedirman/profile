<x-app-layout>
    <div class="page">
        <div class="profile">
            <div class="profile-img"></div>
            <div class="profile-txt"></div>
        </div>
        <div class="riwayat">

        </div>
        <div class="list-prestasi">
            @foreach ($prestasi as $prestasi)
            <div class="prestasi">

            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>