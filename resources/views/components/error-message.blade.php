@if ($errors->all())
    <div class="empty-text ">
        @foreach($errors->all() as $error)
            <p class="">{{ $error }}</p>
        @endforeach
    </div>
@endif
