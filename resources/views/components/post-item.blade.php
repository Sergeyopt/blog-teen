<div class="property-card news-card card">
    <div class="property-card-header image-box">
        <a href="{{ route('view', $post) }}">
            <img src="{{ $post->startsWith() }}" alt="" class="" />
        </a>
    </div>
    <div class="property-card-tasm">
        <div class="pull-left item-t">
            <a href="profile.html" class='img-circle-cover'>
                <img src="{{ asset('assets/img/placeholders/30x30.png') }}" alt="" class="img-circle" />
            </a>
            <span class="name">by <a href="profile.html" class="text-color-primary">{{ $post->user->name }}</a></span>
            <span class="date" style="padding-top: 2px;">
                <i class="fa fa-calendar"></i>
                {{ $post->getFormatDate() }}
            </span>
        </div>
        <div class="item-tag pull-right text-color-primary">
            <div class="">
                @foreach($post->categories as $category)
                    <a href="">{{ $category->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="property-card-box card-box card-block">
        <h3 class="property-card-title">
            <a href="{{ route('view', $post) }}">{{ $post->title }}</a>
        </h3>
        <div class="property-card-descr">{!! $post->formatDescription() !!}</div>
    </div>
</div>
