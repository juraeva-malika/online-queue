
<ul>
@foreach ($doctors as $doctor )
<li>
{{$doctor->fullname}}
</li>
    
@endforeach
</ul>
