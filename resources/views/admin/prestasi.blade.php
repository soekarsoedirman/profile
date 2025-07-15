<div class="page">
    <div class="header">

    </div>
    <div class="make-prestasi">
        <form action="{{route('prestasistore', $prestasis)}}" method="POST">
            <div class="flex">
                <div class="inpr-1">
                    <label for=""></label>
                    <input type="text">
                </div>
                <div class="inpr-2">
                    <label for=""></label>
                    <input type="date">
                </div>
                <div class="inpr-3">
                    <button type="submit"></button>
                </div>
            </div>
        </form>
    </div> 
    <div class="list">
        @foreach ($prestasi as $prestas)
        <div class="flex">
            <h4>{{$prestas->judul}}</h4>
            <p>{{$prestas->tanggal}}</p>
        </div>            
        @endforeach
    </div>
</div>