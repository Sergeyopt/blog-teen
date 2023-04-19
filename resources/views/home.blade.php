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
        <div class="widget widget-menu-right">
            <div id="menu-right">
                <div class="list-group panel text-color-primary border-color-primary">
                    <a href="#home" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Slider</a>
                    <div class="collapse" id="home">
                        <a class="list-group-item" href="slider_standard.html">Standard</a>
                        <a class="list-group-item" href="index_headervideo.html">Video</a>
                        <a class="list-group-item" href="index_fullscreenslider.html">Full Screen</a>
                    </div>
                    <a href="#home-map" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Map</a>
                    <div class="collapse" id="home-map">
                        <a class="list-group-item" href="map.html">Grid results</a>
                        <a class="list-group-item" href="map_list.html">List result</a>
                        <a class="list-group-item" href="map_side.html">Side version</a>
                        <a class="list-group-item" href="map_side_list.html">Side version list</a>
                        <a class="list-group-item" href="map_geo.html?geolocation=paris">Geo regions</a>
                    </div>
                    <a href="#about" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Categories</a>
                    <div class="collapse" id="about">
                        <a class="list-group-item" href="map_side2.html">Real Estate</a>
                        <a class="list-group-item" href="index_yacht.html">Yacht Market</a>
                        <a class="list-group-item" href="index_car.html">Car Dealer</a>
                        <a class="list-group-item" href="index_job.html">Job Finder</a>
                        <a class="list-group-item" href="map_business.html">Business Directory</a>
                        <a class="list-group-item" href="index_classfied.html">Classified Portal</a>
                        <a class="list-group-item" href="index_shop.html">Basic shop</a>
                    </div>
                    <a href="#pages" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#menu-right">Pages</a>
                    <div class="collapse" id="pages">
                        <a class="list-group-item" href="page_gallery.html">Basic with Gallery</a>
                        <a class="list-group-item" href="login.html">Login</a>
                        <a class="list-group-item" href="mylistings.html">My Listings</a>
                        <a class="list-group-item" href="listing.html">Listing Preview</a>
                        <a class="list-group-item" href="ask_expert.html">FAQ</a>
                        <a class="list-group-item" href="agents.html">Agents</a>
                        <a class="list-group-item" href="profile.html">Agent Profile</a>
                        <a class="list-group-item active" href="blog.html">Blog List</a>
                        <a class="list-group-item" href="page_cart.html">Cart</a>
                        <a class="list-group-item" href="component_alerts.html">Components</a>
                        <a class="list-group-item" href="page_invoice.html">Invoice</a>
                        <a class="list-group-item" href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </div><!-- /.widget-search-->
        <x-sidebar />
        <div class="widget widget-ads-right">
            <img src="assets/img/placeholders/265x220.png" alt="" class="center-block" />
        </div><!-- /.widget-ads-->
    </div>
    <!-- /.right side bar -->
</x-app-layout>

