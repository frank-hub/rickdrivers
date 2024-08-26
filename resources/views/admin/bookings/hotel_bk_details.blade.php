@include('admin.layouts.sidemenu')

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Hotel Booking Details</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4><b>Hotel Ref</b>: # <a href="">{{$hotelDetails->id}}</a></h4>
                                            <h4><b>Full Name</b>: {{$hotelBooking->fname}}</h4>
                                            <h4><b>ID No./Passport</b> {{$hotelBooking->identification}}</h4>
                                            <h4><b>Contact</b>: {{$hotelBooking->contact}}</h4>
                                            <h4><b>Payment Method</b>: {{$hotelBooking->payment_method}}</h4>
                                            <h4><b>Date & Time:</b> {{$hotelBooking->date_time}}</h4>

                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('hotels/'.$hotelDetails->image)}}" style="
                                            object-fit: cover;
                                            object-position: 100% 0;
                                            height: 300px;
                                            width: 300px;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($hotelDetails->status == '1')
                        <a href="{{route('hotel_book_status',$hotelDetails->id)}}" class="btn btn-block btn-success">Confirm Booking</a>
                        @else
                        <a href="{{route('hotel_book_status',$hotelDetails->id)}}" class="btn btn-block btn-danger">Remove Booking</a>

                        @endif
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");

			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js')}}"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>

</body>

</html>
