<x-app-layout>
    <div class="col-md-9">
        <section class="widget-blog-listing">
            <div class="properties">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-6">
                            <x-post-item :post="$post"></x-post-item>
                        </div>
                    @endforeach
                </div>
                <nav class="text-center">
                    {{ $posts->onEachSide(2)->links() }}
                </nav>
            </div>
        </section>
    </div><!-- /.center-content -->
    <div class="col-md-3">
        <div class="widget widget-search">
            <form action="#">
                <div class="input-group input-with-search color-primary clearfix">
                    <input type="text" value="" class="form-control" placeholder="SEARCH"/>
                    <button type="submit" class="input-group-addon"><i class='fa fa-search icon-white'></i></button>
                </div>
            </form>
        </div><!-- /.widget-search-->
        
        <x-sidebar />
        <div class="widget widget-ads-right">
            <img src="assets/img/placeholders/265x220.png" alt="" class="center-block" />
        </div><!-- /.widget-ads-->
    </div>
    <!-- /.right side bar -->
</x-app-layout>

