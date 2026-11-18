<h1>Hello user</h1>

<h3><?php echo json_encode($users); ?></h3>
<h3>{{json_encode($users)}}</h3>

@if($users[0]== 'aniil')
    <h2>hello Anil</h2>
@elseif($users[0]== 'peter')
    <h2>Hello Peter</h2>
@else
    <h2>hello Andres</h2>
@endif
@foreach($users as $user)
    <h4>{{$user}}</h4>
@endforeach

@for($i=0;$i<10;$i++)
    <p>Value is: {{$i}}</p>
@endfor
{{printName()}}
@php
    function printName(){
        return 'hi';
    }
@endphp

