<!-- hideShow1 -->
<div id="hideShow1" style="display: none;">
    <div class="right-side-content hidden1">
        <div class="slider-email active">
            <div id="messages_product_view"></div>
            <div id="formSuccess" style="display:none;">Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.</div>
            <form id="contactForm1" method="post">
                <div class="column sixty">
                    <h2>TALK TO US</h2>
                    <ul>
                        <li>
                            <label>Name<em class="required">*</em></label>
                            <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text">
                        </li>
                        <li>
                            <label>Email<em class="required">*</em></label>
                            <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text">
                        </li>
                        <li>
                            <label>Telephone</label>
                            <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text">
                        </li>
                    </ul>
                    <p class="required">* Required Fields</p>
                </div>
                <!--column sixty-->
                <div class="column fourty last">
                    <div class="padding">
                        <label>Comment<em class="required">*</em></label>
                        <textarea name="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                        <div class="textright">
                            <input type="text" name="hideit" value="" style="display:none !important;">
                            <button type="submit" title="Submit" class="button btn-sent"><span>Submit</span></button>
                            <img src="{{ asset(config('app.frontend_themes').'/images/mgkloading1.gif') }}" alt="loader" id="loader" style="display:none;"> </div>
                        <!--textright-->
                    </div>
                    <!--padding-->
                </div>
                <!--column fourty last-->
            </form>
            <a href="javascript:void(0)" id="hideDiv1" class="slider-close"></a> </div>
        <!--slider-email active-->
    </div>
    <!--right-side-content hidden1-->
</div>
<!-- End hideShow1 -->