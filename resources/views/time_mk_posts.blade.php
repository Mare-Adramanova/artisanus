@extends('layouts.main')

@section('content')

<table class="table table-dark p-5 text-info " style="height: 500px">
    @foreach ($posts as $post)
    <tr>
        <td class="align-middle">{{ $post['slug'] }}</td>
        <td class="align-middle">{{ $post['title'] }}</td>
        <td class="align-middle">{{ $post['content'] }}</td>
        <td class="align-middle">{{ $post['updated'] }} </td>
    </tr>
    @endforeach
   
</table>

@endsection

@section('footer')
<footer>
        <p> {{ $footer }} </p>
</footer>
    
@endsection