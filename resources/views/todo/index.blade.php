
@if($errors->has('title'))
    <strong>{{$errors->first('title')}}</strong>
@endif

@foreach ($todos as $todo)
    <p> 
        {{ $todo->id .'.' .$todo->title }}
        <a href="todo/{{$todo->id}}"></a><?Php //刪除指令 ?>
        <form action="todo/{{$todo->id}}" method="post"> 
            {{ csrf_field() }}  <?Php //預防攻擊用 ?>
            {{method_field('DELETE') }}
            <input type="submit" VALUE="DELETE">
  
        </form>
    </p>
@endforeach

<form action="/todo" method="POST"> 
    {{ csrf_field() }}  <?Php //預防攻擊用 ?>
    <input type-"text" placeholder="123456" name="title">
   <input type="submit" name"test">
  
</form>