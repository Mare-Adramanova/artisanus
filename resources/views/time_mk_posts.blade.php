

<table>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post['slug'] }}</td>
        <td>{{ $post['title'] }}</td>
        <td>{{ $post['content'] }}</td>
        <td>{{ $post['updated'] }} </td>
    </tr>
    @endforeach
   
</table>