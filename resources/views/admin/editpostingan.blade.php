<div class="page">
    <div class="header">
        <h3></h3>
    </div>
    <div class="make-post">
        <form action="{{route('storepostingan', $postingans)}}" method="POST" enctype="multipart/form-data">
            <div class="input">
                <label for=""></label>
                <input type="text" name="" value=""  required>
                <label for=""></label>
                <input type="text" name="" value="" required>
                <label for=""></label>
                <input type="radio" name="" id="" value="">
                <label for=""></label>
                <input type="radio" name="" id="" value="">
                <label for=""></label>
                <input type="image" name="" value="" required>
                <label for=""></label>
                <textarea name="" required>{{$postingan}}</textarea>
            </div>
            <div class="button">
                <button type="reset"></button>
                <button type="submit"></button>
            </div>



        </form>
    </div>
</div>