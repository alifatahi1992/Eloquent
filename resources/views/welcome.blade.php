

@foreach($post as $posts)
    <h1>{{$posts->title}} Post By: {{$posts->user->username}}</h1>
    <p>{{$posts->body}}</p>
@endforeach