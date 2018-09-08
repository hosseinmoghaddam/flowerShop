@extends('site-en.layout.container')

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h1 class="title">Contact Us</h1>
            <h3 class="subtitle">Our Location</h3>
            <div class="row">

                <div class="col-sm-3"><strong>Flower Shop</strong><br />
                    <address>
                        Qaen,<br />
                        Shirazi Square,<br />
                        Bozorgmeher Street,<br />
                        university of Qaen
                    </address>
                </div>
                <div class="col-sm-3"><strong>Telephone</strong><br>
                    +91 9898989898<br />
                    <br />
                    <strong>Fax</strong><br>
                    +91 9898989898 </div>
                <div class="col-sm-3"> <strong>Opening Times</strong><br />
                    24X7 Customer Care<br />
                    <br />
                    <strong>Comments</strong><br />
                    This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques. </div>
            </div>
            <form class="form-horizontal" method="post" action="{{ route('en.message') }}">
                @csrf
                <fieldset>
                    <h3 class="subtitle">Send us an Email</h3>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-name">Your Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" name="name" value="" id="input-name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-email">E-Mail Address</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" name="email" value="" id="input-email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">Message</label>
                        <div class="col-md-10 col-sm-9">
                            <textarea name="message" rows="10" id="input-enquiry" class="form-control"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">
                        <input class="btn btn-primary" type="submit" value="Submit" />
                    </div>
                </div>
            </form>
        </div>
        <aside id="column-right" class="col-sm-3 hidden-xs">
            <div class="list-group">
                <h2 class="subtitle">Admin message</h2>
                <p>Our mission is to provide you with an opportunity to show your loved ones with care. </p>
            </div>
        </aside>
        <!--Middle Part End -->
    </div>

@stop