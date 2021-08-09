<h1>Edit Post: # {{$post->id}}</h1>

<form action="/posts/{{$post->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input name="title" value="{{$post->title}}"> <br> <br>
    <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea> 
    <br> <br>
    <input type="submit" >
</form>
