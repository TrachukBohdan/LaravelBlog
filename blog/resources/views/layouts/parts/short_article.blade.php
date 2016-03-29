
<h2>
    <a href="{{action('BlogController@singlePost', ['id'=>$post->id])}}" >
            {{$post->title}}
    </a>
</h2>
<h5><span class="glyphicon glyphicon-time"></span> Створено: <b>{{$post->created_at}}</b></h5>
<a
    href="{{action('BlogController@editPost', ['id'=>$post->id])}}"
    class="btn btn-warning" >
    Редагувати
</a>

<a  href="{{action('BlogController@deletePost', ['id'=> $post->id])}}"
    class="btn btn-danger" >
    Видалити
</a>

<br /><br />
<div>
    <p>{{$post->text}}</p>
</div>
<hr>
