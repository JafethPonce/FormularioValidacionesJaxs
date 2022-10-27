<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Registro</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Libreria de sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">
	<!-- set your website favicon -->
	<link href="favicon.html" rel="icon">	
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="css/contact-form.css" type="text/css">	
</head>


<body>
	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										<div class="item-info">
											<h2 class="item-title text-center">Productos</h2>
										</div><!--End item-info -->
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">
								
								
								<form id="formajax" name="formajax" data-toggle="validator" class="popup-form">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
                                                    <!-- Codigo del producto -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="name" id="name" placeholder="Ingrese el codigo del producto*" class="form-control" type="text"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div>

                                                     <!-- Descripción del producto-->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="email" id="email" placeholder="Ingrese la descripción del producto*" class="form-control" type="email">
														<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
													</div>

                                                     <!-- Costo del producto -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="cel" id="cel" placeholder="Ingrese el costo del producto*" class="form-control" type="text">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div>

                                                    <!-- Stock del producto -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="contra" id="contra" placeholder="Ingrese el stock del producto*" class="form-control" type="text">
														<div class="input-group-icon"><i class="fa fa-book"></i></div> 
													</div>

													 <!-- Botones registrar datos -->
													<div class="form-group last col-sm-12">
														<button type="submit" id="enviar" name="enviar" class="btn btn-custom"><i class='fa fa-envelope'></i> Ingresar</button>
													</div>	
											
													<span class="sub-text">Administración de una empresa</span>
													<div class="clearfix"></div>
												</div>
											</form>
								</div>
							</div>	
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	
	
	
	
	
	
	
	
	
	

	
	<div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>	
	
	<div id="footer" class="footer">
		<div class="container">			
			
			<div class="row">					
				<div class="footer-top col-sm-12">
				</div><!-- end col --> 
			</div><!-- end row -->
			
		</div><!--End container -->
	</div>
	
	<a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>
		
	<!-- jQuery Library -->
	<script src="js/jquery-3.2.1.min.js"></script>	
	<!-- Popper js -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Form Validator -->
	<script src="js/validator.min.js"></script>
	<!-- Contact Form Js -->
	<script src="js/contact-form.js"></script>
	
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#formajax').serialize();

      if ($('#name').val() == '') {
        swal ("¡Debe de Ingrese un Nombre! " , "" , "warning");
        return;
      }

      $.ajax({
        type:"POST",
        url:"registro.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("¡Registro enviado! " , "¡Los datos fueron registrados!" , "success");
            $('#name').val('');
            $('#email').val('');
            $('#cel').val('');
            $('#contra').val('');
          }
          else 
          {
            alert("Error");
          }

        }

      });
      return false;

    });
  });
</script>
