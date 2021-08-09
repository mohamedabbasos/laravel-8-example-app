<h1>Posts list</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Created At</th>
    </tr>
    
    @foreach ($posts as $post)
        <tr>
            <td>  {{ $post->id }} </td>
            <td>  {{ $post->title }} </td>
            <td>  {{ $post->body }} </td>
            <td> <a href="{{ URL::to('posts', $post->id) }}">Show</a> </td>
            <td> <a href="{{ URL::to('posts/' . $post->id, 'edit') }}">Edit</a> </td>
            <td>
                <br>
                <form action="/posts/{{$post->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input onclick="return confirm('Are you sure?')" type="submit" value="Delete" >
                </form>

            </td>
            <td>  {{ $post->created_at }} </td>
        </tr>
    @endforeach

</table>

