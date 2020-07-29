<?php  /*
foreach ($posts as $post) {
    # code...
    $new_element = [];
    if ($post['slug'] == 'secund-post') {
        $slug = $post['slug'];
        $title = $post['title'];
        $content = $post['content'];
        $updated = $post['updated'];
        $new_element [] = $slug . " " . $title . " " . $content . " " . $updated;
        dd($new_element);
        return $new_element;
    }
}*/

?>


<table>


<tr>
    <td>{{ $posts['slug'] }}</td>
    <td>{{ $posts['title'] }}</td>
    <td>{{ $posts['content'] }}</td>
    <td>{{ $posts['updated'] }} </td>
</tr>
 

</table> 

<style type="text/css">
table, tr, td {
    border: 3px solid black;
    border-collapse: collapse;
    padding: 5px;

}

</style>