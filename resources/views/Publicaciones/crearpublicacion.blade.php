<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jack Blogger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
	
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="../images/loading.gif" alt="" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-3 logo_section">
                     <div class="full">
                         <div class="center-desk">
                             <div class="logo"> <a href="index.html"><img src="../../images/logo.jpeg" alt="#"></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-9">
                     <div class="menu-area">
                         <div class="limit-box">
                             <nav class="main-menu">
                                 <ul class="menu-area-main">
                                     <li class="{{ !Route::is('index') ?: 'active' }}">
                                         <a href="{{ route('index') }}">Inicio</a>
                                     </li>
                                     <li class="{{ !Route::is('sobrenosotros') ?: 'active' }}">
                                         <a href="{{ route('sobrenosotros') }}">Sobre Nosotros</a>
                                     </li>
                                     {{-- <li>
                                                       <a href="marketing.html">Marketing</a>
                                                    </li> --}}
                                                    <li class="{{! Route::is('publicacion.crear') ?: 'active'}}">
                                                       <a href="{{route('publicacion.crear')}}">Crear Publicacion</a>
                                                    </li>
                                                    <li class="{{! Route::is('contacto') ?: 'active'}}">
                                                       <a href="{{route('contacto')}}">Contacto</a>
                                                    </li>
                                                    <li>
                                                       <a href="{{route('home')}}">Login</a>
                                                    </li>
                                                    <li>
                                                       <a href="{{route('register')}}">Register</a>
                                                    </li>
                                                   
                                                 </ul>
                                              </nav>
                                           </div>
                                        </div>
                                     </div>
                                     </div>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- end header inner -->
     </header>
      <!-- end header -->
      
		<div class="card">
			<div class="card-body">
				{!! Form::open(['route' => 'publicacion.nueva','autucomplete' => 'off']) !!}

					{!! Form::hidden('user_id', auth()->user()->id) !!}

					<div class="form-group">
						{!! Form::label('nombre','Nombre: ') !!}
						{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post']) !!}

						@error('nombre')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					<div class="form-group">
						{!! Form::label('slug','Slug: ') !!}
						{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post','readonly']) !!}

						@error('slug')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					<div class="form-group">
						{!! Form::label('categoria_id','Categoria: ') !!}
						{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'seleccione la categoria']) !!}
						
						@error('categoria_id')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					<div class="form-group">
						<p class="font-weight-bold">Etiquetas</p>
						@foreach($etiquetas as $etiqueta)
							<div class="form-check">
								<label class="form-check-label">
									{!! Form::checkbox('etiquetas[]', $etiqueta->id, null) !!}
									{{ $etiqueta->nombre }}
								</label>
							</div>
						@endforeach
						<hr>
						@error('etiquetas')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>
					
					<div class="form-group">
						<p class="font-weight-bold">Estado: </p>
						<label>
							{!! Form::radio('status', 1, true) !!}
							Borrador
						</label>
						
						<label>
							{!! Form::radio('status', 2) !!}
							Publicado
						</label>
						<hr>
						@error('status')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					<div class="form-group">
						{!! Form::label('tema', 'Tema:')  !!}
						{!! Form::textarea('tema', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Tema de la publicacion']) !!}
						@error('tema')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					<div class="form-group">
						{!! Form::label('contenido', 'Contenido:')  !!}
						{!! Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Contenido de la publicacion']) !!}
						@error('contenido')
							<small class="text-danger">{{$message }}</small>
						@enderror
					</div>

					{!! Form::submit('Crear Publicacion', ['class' => 'btn btn-primary']) !!}

				{!! Form::close() !!}
			</div>
		</div>

      <!-- footer -->
      <footer>
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <a href="{{route('index')}}"><img src="../../images/logo.jpeg" alt="#" /></a>
                     <ul class="contact_information">
                         <li><span><img src="../../images/location_icon.png" alt="#" /></span><span
                                 class="text_cont">Reyes Acozac 55740 <br>Edo. de Méx.</span></li>
                         <li><span><img src="../../images/phone_icon.png" alt="#" /></span><span class="text_cont">56 10 04 79 97<br>987 654 3210</span></li>
                         <li><span><img src="../../images/mail_icon.png" alt="#" /></span><span
                                 class="text_cont">contacto@bytecoders.tech<br>support@bytecoders.tech</span></li>
                     </ul>
                     <ul class="social_icon">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                 <div class="col-lg-2 col-md-6">
                     <div class="footer_links">
                         <h3>Quick link</h3>
                         <ul>
                             <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Inicio</a></li>
                             <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Sobre Nosotros</a></li>
                             <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contactanos</a></li>
                             <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Login</a></li>
                             <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="footer_links">
                         <h3>Contactanos</h3>
                         <form action="index.html">
                             <fieldset>
                                 <div class="field">
                                     <input type="text" name="name" placeholder="Tu nombre" required="" />
                                 </div>
                                 <div class="field">
                                     <input type="email" name="email" placeholder="Email" required="" />
                                 </div>
                                 <div class="field">
                                     <input type="text" name="subject" placeholder="Subject" required="" />
                                 </div>
                                 <div class="field">
                                     <textarea placeholder="Message"></textarea>
                                 </div>
                                 <div class="field">
                                     <div class="center">
                                         <button class="reply_bt">Enviar</button>
                                     </div>
                                 </div>
                             </fieldset>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                     <p>Copyright © 2022 Design by <a href="https://html.design/">ByteCoders</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../../js/jquery.min.js"></script>
      <script src="../../js/popper.min.js"></script>
      <script src="../../js/bootstrap.bundle.min.js"></script>
      <script src="../../js/jquery-3.0.0.min.js"></script>
      <script src="../../js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../js/custom.js"></script>
      <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

      <script>
         $(document).ready( function() {
               $("#nombre").stringToSlug({
                  setEvents: 'keyup keydown blur',
                  getPut: '#slug',
                  space: '-'
               });
         });
      </script>
   </body>
</html>





<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

<script>
	$(document).ready( function() {
		$("#nombre").stringToSlug({
			setEvents: 'keyup keydown blur',
			getPut: '#slug',
			space: '-'
		});
	});

    ClassicEditor
    .create( document.querySelector('#contenido') )
    .catch( error => {
		console.error( error );
    } );

	ClassicEditor
	.create( document.querySelector('#tema') )
    .catch( error => {
		console.error( error );
	} );


</script>



