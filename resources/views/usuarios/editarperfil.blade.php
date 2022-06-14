@extends('layouts.layout')

@section('nombre', 'Editar Perfil')
@section('content')
<section id="page-title">

			<div class="container clearfix">
				<h1>Editar Perfil</h1>
				<span>ByteCoders</span>
				<!-- <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Widgets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Event Registration Form</li>
				</ol> -->
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-6">
								<form class="row" id="event-registration" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>Nombre:</label>
										<input type="text" name="event-registration-first-name" id="event-registration-first-name" class="form-control required" value="" placeholder="Enter your First Name">
									</div>
									<div class="col-6 form-group">
										<label>Apellidos:</label>
										<input type="text" name="event-registration-last-name" id="event-registration-last-name" class="form-control required" value="" placeholder="Enter your Last Name">
									</div>
									<div class="col-12 form-group">
										<label>Correo:</label>
										<input type="email" name="event-registration-email" id="event-registration-email" class="form-control required" value="" placeholder="Enter your Email Address">
									</div>
									<div class="col-6 form-group">
										<label>Genero:</label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="event-registration-gender"id="event-registration-gender-male" value="Male">
											<label class="form-check-label nott" for="event-registration-gender-male">Masculino</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="event-registration-gender"id="event-registration-gender-female" value="Female">
											<label class="form-check-label nott" for="event-registration-gender-female">Femenino</label>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>Intereses</label>
										<select class="form-select required" name="event-registration-interests" id="event-registration-interests">
											<option value="">-- Seleccione una --</option>
											<option value="UX Design">UX Design</option>
											<option value="Backend Development">Backend Development</option>
											<option value="Videography">Videography</option>
											<option value="VFX Animations">VFX Animations</option>
											<option value="Others">Otros</option>
										</select>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Website:</label>
											<input type="text" name="event-registration-website" id="event-registration-website" class="form-control required url" value="https://" placeholder="Enter your Website Address">
										</div>
										<div class="form-group">
											<label>Biografia:</label>
											<textarea name="event-registration-bio" id="event-registration-bio" class="form-control required" cols="30" rows="5"></textarea>
										</div>
									</div>
									<div class="col-6 form-group">
										<label>Redes Sociales:</label>
										<div class="input-group">
											<span class="input-group-text">Twitter</span>
											<input type="text" name="event-registration-twitter" id="event-registration-twitter" class="form-control" value="" placeholder="@username">
										</div>
									</div>
									<div class="col-6 form-group">
										<label for="">&nbsp;</label>
										<div class="input-group">
											<span class="input-group-text">Github</span>
											<input type="text" name="event-registration-github" id="event-registration-github" class="form-control" value="" placeholder="@username">
										</div>
									</div>
									<!-- <div class="col-12">
										<div class="form-group">
											<label>Event Passes</label>
											<select class="form-select required" name="event-registration-passes" id="event-registration-passes">
												<option value="">-- Select One --</option>
												<option value="Contributors Day + Main Event">Contributors Day + Main Event</option>
												<option value="Main Event only">Main Event only</option>
												<option value="VIP Access">All Days + VIP Access to Insiders Club</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>How did you hear about the Event?</label>
											<select class="form-select required" name="event-registration-know-us" id="event-registration-know-us">
												<option value="">-- Select One --</option>
												<option value="Google">Google</option>
												<option value="Social Media">Social Media</option>
												<option value="Friends">Friends</option>
												<option value="Advertisement">Advertisement</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div> -->
									<div class="col-12 d-none">
										<input type="text" id="event-registration-botcheck" name="event-registration-botcheck" value="" />
									</div>
									<div class="col-12">
										<button type="submit" name="event-registration-submit" class="btn btn-secondary">Guardar</button>
									</div>

									<input type="hidden" name="prefix" value="event-registration-">
								</form>
							</div>

							<div class="col-lg-6 ps-lg-4">
							<div class="content container img">
			<img class="foto-perfil" src="https://github.com/pedrogalguz05.png" alt="Foto Perfil">
		</div>
		<br>
		<br>
		<div class="col-12">
										<button type="submit" name="event-registration-submit" class="btn btn-secondary">Cambiar foto</button>
									</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>

@endsection