<ul>
    @foreach($parents as $parent)
        <li>
            {{ $parent->title }}
            @if(count($parent->parents))
                @include('parents',['parents' => $parent->parents])
            @endif
        </li>
    @endforeach
</ul>
