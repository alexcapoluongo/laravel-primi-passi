<ul>
@foreach ($menu as $item)
<li><a href="{{ $item['viewLink'] }}"> {{ $item['name'] }} </li>
@endforeach
</ul>


