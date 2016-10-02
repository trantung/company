<?php $slide = AdminSlide::where('type', SLIDE_TOP)->get();
$numSlide = count($slide);
?>
@if ($numSlide > 0)
    <div id="homeSlide" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @for ($i = 0; $i < $numSlide; $i++)
            <li data-target="#homeSlide" data-slide-to="{{ $i }}" @if ($i == 0) class="active" @endif></li>
            @endfor    
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($slide as $k => $image)
            <div class="item @if($k == 0) active @endif">
                <a href="{{ $image->link }}">
                    <img src="{{ url(UPLOADIMG . UPLOAD_SLIDE . '/' . $image->id . '/' . $image->image_url) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endif
