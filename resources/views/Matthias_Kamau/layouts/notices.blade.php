@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="container">
        <div class="alert alert-dark">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">X</button>
            <span><b> Danger - </b> {{ $error }}</span>
        </div>
    </div>
    @endforeach
@endif

@if(session('successMsg'))
    <div class="container">
        <div class="alert alert-dark">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">X</button>
            <span><b> Success - </b> {{ session('successMsg') }}</span>
        </div>
    </div>
@endif