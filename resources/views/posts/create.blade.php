<h1>Create new Post</h1>

<form action="/posts"  method="post" enctype="multipart/form-data">
    @csrf
    <input name="title"> <br> <br>
    <textarea name="body" id="" cols="30" rows="10"></textarea> 
    <br><br>

    <input type="file" name="image" id="">
    <br> <br>
    <input type="submit" >
</form>
