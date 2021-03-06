@include('header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Admin Withdraw Funds</h3>
				
				@if(Session::has('message'))
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                        </div>
                    </div>
                </div>
                @endif

                @if(count($errors) > 0)
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach ($errors->all() as $error)
                            <i class="fa fa-warning"></i> {{ $error }}
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

				<div class="sign-up-row widget-shadow">
					<form method="post" action="{{action('HomeController@withdraw')}}">
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Amount to withdraw* : <small>Max 20k at a time</small></h4>
						</div>
						<div class="sign-up2">
							<input type="text" name="amount" value="N20000" disabled>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
						<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					</div>
					<input type="hidden" name="right" value="{{Auth::user()->right}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
				</form>
				</div>
			</div>
		</div>
		@include('footer')