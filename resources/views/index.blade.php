@extends('app')
@section('content')
<div class="container">
    <form action="{{ route('form-submit') }}" method="post"> 
        @csrf
        <!--inputs-->
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
</div>
@endsection


@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	@if($errors->first())
        Swal.fire(
            '<b  style="color: red">HATA!</b>',
            '{{$errors->first()}}',      
        )
        @endif
        @if(session('success'))
        Swal.fire(
            '<b style="color: green">BAŞARILI!</b>',
            '{!! session('success') !!}',       
        )
        @endif
</script>
@endsection