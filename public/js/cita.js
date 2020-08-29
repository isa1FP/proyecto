var prueba = '';

$(document).ready(function () {
	if($('#textScenario').val() == 'edit')
	{
		var data = JSON.parse($('#hiddenServicio').val());
		for(var j = 0; j < data.length; j++)
		{
			agregaServico(data[j]);
		}
	}
});


// PACIENTE
$('#buscarPacienteCita').click(function() {
	$('#modalPaciente').modal();
	buscarPaciente();
	return false;
});

$('#btnBuscar').click(function() {
	buscarPaciente();
	return false;
});
var buscarPaciente = function() 
{
	$.ajax({
       	type:'POST',
       	url:'buscarPaciente',
       	data: {
       		'_token': $('#token').val(),
       		'valor': $('#buscador').val()
       	},
       	success:function(data) {
       		var dato = JSON.parse(data);

       		$('#tbodyPacientes').empty();

       		if(dato.length > 0)
       		{
       			for(var i = 0; i < dato.length; i++)
       			{
       				$('#tbodyPacientes').append(
		          		'<tr>' +
		          			'<td style="display: none;" id="datoOculto' + dato[i].id + '">' + JSON.stringify(dato[i]) + '</td>' +
			          		'<td class="text-left">' + dato[i].ci + '</td>' +
			          		'<td class="text-left">' + dato[i].nombres + '</td>' +
			          		'<td class="text-left">' + dato[i].apellidos + '</td>' +
			          		'<td class="text-right">' +
		                      '<button type="button" onclick="seleccionar(' + dato[i].id + ')" class="btn btn-default btn-sm">' + 
		                        '<i class="fa fa-hand-o-right" aria-hidden="true"></i>' +
		                      '</button>' +
		                    '</td>' +
			          	'</tr>'
		      		);
       			}
       		}
       		else
       		{
       			$('#tbodyPacientes').append(
	          		'<tr>' +
		          		'<td class="text-left">Vacio..</td>' +
		          	'</tr>'
	      		);
       		}
	        
       	}
    });
}
var seleccionar = function(ide)
{
	var dato = JSON.parse($('#datoOculto' + ide).text());
	var paciente = dato.nombres + ' ' + dato.apellidos;

	$('#textCI').val(dato.ci);
	$('#nombre').val(dato.nombres);
	$('#apellidos').val(dato.apellidos);
	$('#hiddenPaciente').val( $('#datoOculto' + ide).text() );

	$('#modalPaciente').modal('toggle');
	// prueba = dato;
}



// SERVICIO
$('#buscarServicioModal').click(function() {
	$('#modalServicios').modal();
	buscarServicios();
	return false;
});

$('#btnBuscarServicio').click(function() {
	buscarServicios();
	return false;
});
var buscarServicios = function() {
	$.ajax({
       	type:'POST',
       	url:'buscarServicio',
       	data: {
       		'_token': $('#token').val(),
       		'valor': $('#buscadorServicio').val()
       	},
       	success:function(data) {
       		var dato = JSON.parse(data);

       		$('#tbodyServicios').empty();

       		if(dato.length > 0)
       		{
       			for(var i = 0; i < dato.length; i++)
       			{
       				$('#tbodyServicios').append(
		          		'<tr>' +
		          			'<td style="display: none;" id="datoOcultoServ' + dato[i].id + '">' + JSON.stringify(dato[i]) + '</td>' +
			          		'<td class="text-left">' + dato[i].nombre + '</td>' +
			          		'<td class="text-left">' + dato[i].precio + '</td>' +
			          		'<td class="text-right">' +
		                      '<button type="button" onclick="seleccionarServicio(' + dato[i].id + ')" class="btn btn-default btn-sm">' + 
		                       '<i class="fa fa-hand-o-right" aria-hidden="true"></i>' +
		                      '</button>' +
		                    '</td>' +
			          	'</tr>'
		      		);
       			}
       		}
       		else
       		{
       			$('#tbodyServicios').append(
	          		'<tr>' +
		          		'<td class="text-left">Vacio..</td>' +
		          	'</tr>'
	      		);
       		}
	        
       	},
       	error: function(XMLHttpRequest, textStatus, errorThrown) { 
        	// alert("Status: " + textStatus); 
        	alert("Error: " + errorThrown); 
    	}
    });
}
var seleccionarServicio = function(ide)
{
	var dato = JSON.parse($('#datoOcultoServ' + ide).text());
	
	agregaServico(dato);
	$('#modalServicios').modal('toggle');
}
var agregaServico = function(dato) {
	$('#tbodyListaServicios').append(
  		'<tr id="fila-' + dato.id + '">' +
  			'<td style="display: none;" id="datoServ' + dato.id + '">' + JSON.stringify(dato) + '</td>' +
      		'<td class="text-left">' + dato.nombre + '</td>' +
      		'<td class="text-left">' + dato.precio + '</td>' +
      		'<td class="text-right">' +
              '<button type="button" onclick="eliminarServicio(' + dato.id + ')" class="btn btn-default btn-sm">' + 
                '<i class="fa fa-trash" aria-hidden="true"></i>' +
              '</button>' +
            '</td>' +
      	'</tr>'
	);
}
var eliminarServicio = function(id)
{
	$('#fila-' + id).remove();
}
// FIN SERVICIO




$('#botonGuardar').click(function() {
	// bootbox.confirm("This is the default confirm!", function(result){ 
	//     console.log('This was logged in the callback: ' + result); 
	// });


	var arrayServicio = [];
	$('#tbodyListaServicios > tr').each(function() {
		var identificador = $(this).attr('id');
		identificador = identificador.split('-');

		var servicio = $('#datoServ' + identificador[1]).text();
		arrayServicio.push(servicio);
	});

	$('#hiddenServicio').val( JSON.stringify(arrayServicio) );
	$('#formulario').submit();
});