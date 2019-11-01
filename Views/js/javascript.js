function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}

 
function validar(){
    var regexemail = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/; //expresion regular para emails validos
    var mensaje =""; //variable que va a almacenar todos los mensajes de error
    var error =0; //ariable auxiliar que se va a utilizar para retornar o no falso. 
   	reset();
   

    if ($("#nombre").val()==""){ 
        error++;
        $("#nombre").addClass('is-invalid');
    }
    
    if ($("#apellido").val()==""){ 
    error++;
    $("#apellido").addClass('is-invalid');
    }

    if ($("#nom_usuario").val()==""){ 
    error++;
    $("#nom_usuario").addClass('is-invalid');
    }    

    if(!$("#mail").val().match(regexemail)){
        error++;
        $("#mail").addClass('is-invalid');
    }


    	    if($("#pass").val().length < 5){
           error++;
        $("#pass").addClass('is-invalid');
    }

		    var re_pass = $("#re_pass").val();
           console.log(re_pass);

		  var pass = $("#pass").val();
		    console.log(pass);

		    if(re_pass != pass){
		        error++;
		        console.log(error)
		        $("#re_pass").addClass('is-invalid');
		    }



		        if ($("#localidad").val()==""){ 
		    error++;
		    $("#localidad").addClass('is-invalid');
		    }    


		        if ($("#domicilio").val()==""){ 
		    error++;
		    $("#domicilio").addClass('is-invalid');
		    }  


		            if ($("#nro").val()==""){ 
		    error++;
		    $("#nro").addClass('is-invalid');
		    }  


		    if(error==0){
                console.log(error)
		    	  $(".formulario").submit();
		    }
    }

 


function reset(){ /*Esta funciona elimina todas las clases de error*/
    $("#nombre").removeClass('is-invalid');
    $("#apellido").removeClass('is-invalid');
    $("#localidad").removeClass('is-invalid');
    $("#email").removeClass('is-invalid');
    $("#pass").removeClass('is-invalid'); 
}