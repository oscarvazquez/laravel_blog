@extends('app')

	@section('content')
	
	<div class = "row">
		<div class = "col-lg-8 col-lg-offset-3">
			<form action = "/messages" method = "post" class="form-horizontal">
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="row">
					<h1>contact</h1>
				    <div class="form-group col-sm-5">
				        <label for="name" class="h4">Name</label>
				            <input name = "name" type="text" class="form-control" id="name" placeholder="Enter name" required>
				    </div>
				    <div class="form-group col-sm-5">
				        <label for="email" class="h4">Email</label>
				        <input name = "email" type="email" class="form-control" id="email" placeholder="Enter email" required>
				    </div>
				</div>
				<div class = "row">
					<div class="form-group col-sm-10">
					    <label for="message" class="h4 ">Message</label>
					    <textarea name = "message" id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
					</div>
				</div>
				<div class = 'row'>
					<div class = "col-lg-4">
						<input type="submit" id="form-submit" class="btn btn-success btn-lg" value = "submit">
					</div>
				</div>
				<a href = "https://www.linkedin.com/in/oscar-vazquez-1baaa980" class="btn btn-social-icon btn-linkedin color_white_link">
				   	<span class="fa fa-linkedin"></span>
				</a>
				<a href="https://github.com/oscarvazquez" class="btn btn-social-icon btn-facebook color_white_link">
				   	<span class="fa fa-facebook"></span>
				</a>
				<a href="https://github.com/oscarvazquez" class="btn btn-social-icon btn-github color_white_link final_link">
				   	<span class="fa fa-github"></span>
				</a>
			</form>
		</div>
	</div>


	@endsection
@stop