<?php
include('header.php');
?>

    <section id="index" class="hero-unit">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <h2 class="tagline">Book photographer for your special moments</h2>
                </div>
                <div class="well-lg col-md-11 col-md-offset-1 search-box">
                    <form method="GET" action="http://app.photographers.com.ng/search" accept-charset="UTF-8"
                          class="form-inline">
                        <div class="form-group">
                            <label for="Location">Location</label>
                            <select class="form-control col-md-2" id="Location" name="Location">
                                <option value="Andheri(East)">Andheri(East)</option>
                                <option value="Andheri(West)">Andheri(West)</option>
                                <option value="Bandra">Bandra</option>
                                <option value="Bhayander">Bhayander</option>
                                <option value="Churchgate">Churchgate</option>
                                <option value="Dadar">Dadar</option>
                                <option value="Elphistone Road">Elphistone Road</option>
                                <option value="Goregaon">Goregaon</option>
                                <option value="Grant Road">Grant Road</option>
                                <option value="Jogeshwari">Jogeshwari</option>
                                <option value="Kandivali">Kandivali</option>
                                <option value="Khar Road">Khar Road</option>
                                <option value="Lower Parel">Lower Parel</option>
                                <option value="Marine Lines">Marine Lines</option>
                                <option value="Mahim">Mahim</option>
                                <option value="Matunga">Matunga</option>
                                <option value="Mahalaxmi">Mahalaxmi</option>
                                <option value="Malad">Malad</option>
                                <option value="Mira Road">Mira Road</option>
                                <option value="Naigaon">Naigaon</option>
                                <option value="Nalla Sopara">Nalla Sopara</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Sion">Sion</option>
                                <option value="Thane">Thane</option>
                                <option value="Ulhas Nagar">Ulhas Nagar</option>
                                <option value="Vasai Road">Vasai Road</option>
                                <option value="Vile Parle">Vile Parle</option>
                                <option value="Virar">Virar</option>
                                <option value="Vikhroli">Vikhroli</option>
                                <option value="Borivali">Borivali</option>
                                <option value="Dahisar">Dahisar</option>
                                <option value="Mumbai Central">Mumbai Central</option>
                                <option value="Charni Road">Charni Road</option>
                                <option value="Kurla">Kurla</option>
                                <option value="Ghatkopar">Ghatkopar</option>
                                <option value="CST">CST</option>
                                <option value="Bhandup">Bhandup</option>
                            </select></div>

                        <div class="form-group">
                            <label for="expertise">Expertise</label> <select class="form-control" id="expertise"
                                                                             name="expertise">
                                <option value="" selected="selected">Area of Expertise</option>
                                <option value="Wedding / Events">Wedding / Events</option>
                                <option value="Industrial / Corporate">Industrial / Corporate</option>
                                <option value="Portrait">Portraits</option>
                                <option value="Marketing / Documentary">Marketing / Documentary</option>
                            </select></div>

                        <div class="form-group">
                            <label for="budget">Budget (in Rupees)</label>

                            <div class="input-group">
                                <input class="form-control col-md-1" placeholder="Budget" name="budget" type="text"
                                       value="10000" id="budget"> <span class="input-group-addon">Rupees</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration of event (in Hours)</label>

                            <div class="input-group">
                                <input class="form-control" placeholder="Duration of event" name="duration" type="text"
                                       value="1" id="duration"> <span class="input-group-addon">hour(s)</span>
                            </div>
                        </div>
                        <input class="btn btn-primary search-btn" type="submit" value="Search"></form>
                </div>
            </div>
        </div>
    </section>

    <section id="index-copy" class="hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="http://app.photographers.com.ng/img/book.png">

                    <p class="copy">
                        Photography is a means to capture unforgettable moments of life. Check photogarapher near your
                        area and book for events.
                    </p>

                    <div class="caption btn btn-primary">Book a photographer</div>
                </div>

                <div class="col-md-4 text-center">
                    <img src="http://app.photographers.com.ng/img/join.png">

                    <p class="copy">
                        As a photographer, you have to experience more amd grow your business more. We help you to
                        achieve that milestone.
                    </p>

                    <div class="caption"><a href="http://app.photographers.com.ng/register" class="btn btn-primary">List
                            your business</a></div>
                </div>

                <div class="col-md-4 text-center">
                    <img src="http://app.photographers.com.ng/img/help.png">

                    <p class="copy">
                        It's hard to find a good photographer, so we gather all photographer at single platform and
                        helps you to solve your problems.
                        If you like their portfolios then click on <b>Book Me</b> button
                    </p>

                    <div class="caption"><a href="http://app.photographers.com.ng/how-it-works" class="btn btn-primary">How
                            it works</a></div>
                </div>

            </div>
        </div>
    </section>
    </body>
    </html>
<?php
include('footer.php');
?>