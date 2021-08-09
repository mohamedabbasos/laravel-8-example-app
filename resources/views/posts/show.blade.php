<h1>Post: # {{$post->id}}</h1>

<table border="1">
    <tr>
        <td>Title</td>
        <td>{{$post->title}}</td>
    </tr>
    <tr>
        <td>Body</td>
        <td>{{$post->body}}</td>
    </tr>
    <tr>
        <td>Image</td>
        <td><img src="{{'http://127.0.0.1:8000/' . $post->image}}" alt="" srcset=""></td>
    </tr>
</table>

<br><hr>

<table border="1">
    <tr>
        <th>Comment</th>
        <th>Created At</th>
    </tr>
    
    @foreach ($post->comments as $comment)
        <tr>
            <td>  {{ $comment->content }} </td>
            <td>  {{ $comment->created_at }} </td>
        </tr>
    @endforeach

</table>
<br>

<form action="/comments" method="post">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <textarea name="content" id="" cols="30" rows="3"></textarea> 

    <input type="submit" >
</form>
