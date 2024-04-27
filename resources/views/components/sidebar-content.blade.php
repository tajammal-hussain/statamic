<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<div id="main" class="" bis_skin_checked="1">
    <nav class="nav-main nav-mobile">
        <div class="nav-main-inner" bis_skin_checked="1">
            @foreach ($sidebar as $item)
                @if (!isset($currentParent) || $currentParent != $item['parent'])
                    @if (isset($currentParent))
                        </ul>
                    @endif
                    <h6>{{ $item['parent'] }}</h6>
                    <ul>
                        @php $currentParent = $item['parent']; @endphp
                @endif
                <li class=""><a
                        href="{{ $item['url'] }}"><i>{!! $item['svg'] !!}</i><span>{{ $item['name'] }}</span></a>
                </li>
            @endforeach
        </div>
    </nav>
</div> <!---->
