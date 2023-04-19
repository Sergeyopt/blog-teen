<div class="panel">
    <div class="sidebar-title">
        <h1 class="sidebar-title--header">
            {{ \App\Models\TextModel::getTitle('about-us-sidebar') }}
        </h1>
        <div class="sidebar-description">
            <p>{!! \App\Models\TextModel::getContent('about-us-sidebar') !!}</p>
        </div>
        <a href="#!" class="btn btn-primary w-full">
            Go to about me
        </a>
    </div>
</div>
