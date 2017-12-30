<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 visible-md visible-lg"> <img alt="Image" class="border--round box-shadow-wide" src="//res.cloudinary.com/by-mistake-com/image/upload/v1513032821/contact_abg0e3.jpg"> </div>
            <div class="col-sm-12 col-md-7">
                <div class="row">
                    <div class="boxed boxed--border">
                        <form action="<?php echo get_template_directory_uri(); ?>/utils/mail/mail.php" class="text-left form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                            <div class="col-sm-6"> <span>Name:</span> <input type="text" name="name"> </div>
                            <div class="col-sm-6"> <span>Company:</span> <input type="text" name="company"> </div>
                            <div class="col-sm-6"> <span>Email Address *:</span> <input type="email" name="email" class="validate-required validate-email"> </div>
                            <div class="col-sm-6"> <span>Phone:</span> <input type="tel" name="phone" > </div>
                            <div class="col-sm-12"> <span>About Project *:</span> <textarea rows="5" name="description" class="validate-required"></textarea> </div>
                            <div class="col-sm-12 text-center boxed">
                                <h5>Services Required</h5>
                            </div>
                            <div class="col-sm-3 col-xs-6 text-center"> <span class="block">Coaching</span>
                                <div class="input-checkbox"> <input type="checkbox" name="design"> <label></label> </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 text-center"> <span class="block">Development</span>
                                <div class="input-checkbox"> <input type="checkbox" name="dev"> <label></label> </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 text-center"> <span class="block">Software consulting</span>
                                <div class="input-checkbox"> <input type="checkbox" name="brand"> <label></label> </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 text-center"> <span class="block">Other</span>
                                <div class="input-checkbox"> <input type="checkbox" name="marketing"> <label> </label> </div>
                            </div>
                            <div class="col-sm-12 text-center boxed">
                                <h5>Approximate Budget</h5>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="input-radio"> <span>&lt; $1,000</span> <input type="radio" name="budget" value="under5k" class="validate-required"> <label></label> </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="input-radio"> <span>$1,000 - $5,000</span> <input type="radio" name="budget" value="5kto10k" class="validate-required"> <label></label> </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="input-radio"> <span>$5,000+</span> <input type="radio" name="budget" value="10kplus" class="validate-required"> <label></label> </div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="age" tabindex="-1" value="">
                            </div>
                            <div class="col-sm-12 boxed"> <button type="submit" class="btn btn--primary type--uppercase">Submit Planner</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 