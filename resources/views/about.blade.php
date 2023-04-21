<x-app-layout meta-title="Информация о нас" meta-description="Lorem ipsum">
    <div class="col-md-12">
        <section class="widget widget-box widget-section box-container widget-contact-info">
            <div class="widget-header text-uppercase">
                {{ $about->title }}
            </div>
            <h4><strong class="text-color-primary">{{ $about->content }}</strong></h4>
        </section>
        <div class="widget widget-section widget-box box-container">
            <div class="widget-header text-uppercase">
            </div>
            <div class="property-map">
                <img src="/storage/{{ $about->image }}" width="1200" alt="About US">
            </div>
        </div>  <!-- /. widget-map  -->
        <div class="widget widget-box widget-section box-container widget-contactform">
            <div class="widget-header text-uppercase">
                Contact form
            </div>
            <form class="form-additional">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="input" placeholder="First and last name" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="input" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="input" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message"  rows='3'></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="control-group form-group control-group-captcha">
                            <img src="assets/img/placeholders/120x35.png" width="120" height="35" style="border:0;" alt=" " />
                            <div class="captcha-input-box">
                                <input class="form-control captcha" name="captcha" type="text" placeholder="Enter code from image" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group clearfix">
                            <button class="btn btn-primary color-primary pull-right" type='submit'>Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>  <!-- /. widget-map  -->
    </div><!-- /.center-content -->
</x-app-layout>
