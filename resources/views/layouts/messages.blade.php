@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <script>
        alert('{{session('success')}}');
    </script>
@endif
@if(session('warning'))
    <script>
        alert('{{session('warning')}}');
    </script>
@endif
