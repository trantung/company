<?php $team = AdminTeam::get();
$type = TypeNew::find(5);
$news = AdminNew::where('type_new_id', 5)
        ->orderBy('id', 'desc')
        ->limit(3)
        ->get();
?>
<div id="main" class="container">
    <div class="row">
        <div class="col-sm-9">
            @if (count($team) > 0)
            <div id="team" class="clearfix">
                <h2 class="block-title">{{ trans('captions.leader') }}</h2>
                <div class="team-wr">
                @foreach ($team as $t)
                    <div class="thumbnail">
                        <img src="{{ url(UPLOADIMG . UPLOAD_TEAM . '/' . $t->id . '/' . $t->image_url) }}" alt="{{ $t->name }}" class="img-responsive">
                        <div class="caption">
                            <h3>{{ $t->name }}</h3>
                            <p>{{ $t->position }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            @endif

            @if(count($news) > 0)
                <div id="home-news">
                    <h2 class="block-title">{{ trans('captions.newscailan') }}</h2>
                    <div class="row">
                    @foreach($news as $new)
                        <div class="col-sm-6 item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="{{ action('SiteTypeController@showChildSlug', [$type->slug, $new->slug]) }}">
                                        <img class="media-object" src="{{ url(UPLOADIMG . '/news'.'/'. Common::getIdVi($new->id, 'AdminNew') . '/' . $new->image_url) }}" alt="{{ $new->name }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="{{ action('SiteTypeController@showChildSlug', [$type->slug, $new->slug]) }}">{{ $new->name }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            @endif

        </div>

        <div class="col-sm-3">
            @include('site.common.sidebar')
        </div>
    </div>
</div>