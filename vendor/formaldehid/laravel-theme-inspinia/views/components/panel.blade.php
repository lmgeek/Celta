<div @if(isset($id)) id="{{ $id }}" @endif class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>{{ $title }}</h5>
        @if(isset($tools))
            <div class="ibox-tools">
                @if(is_array($tools))
                    @foreach($tools as $tool)
                        @if($tool["type"] == "collapse")
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        @elseif($tool["type"] == "button")
                            <a href="#" class="btn btn-xs {{ $tool["class"] or '' }}" name="{{ $tool["name"] }}">{{ $tool["title"] }}</a>
                        @endif
                    @endforeach
                @else
                    {!! $tools !!}
                @endif
            </div>
        @endif
    </div>
    <div class="ibox-content">
        {!! $content or '' !!}
    </div>
</div>