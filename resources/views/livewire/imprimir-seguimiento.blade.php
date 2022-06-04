<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{ public_path('css/app.css') }}">

        <style>

        	tbody tr:nth-child(odd){
        		background-color: #cdf8ff;
        	}

        	thead tr{
        		color: white; 
        		background-color: #56e8ff !important; 
        	}

        	h1{
        		text-align: center;
        		font-size: 24px !important;
        	}

        	.logo{
            	z-index: -1000;
            	position: absolute;
            	top: -15px;
            	left: 0px;
            	width: 75px !important;
        	}

        </style>

    </head>
    <body>

    	<div class="logo">
                <img src="{{ public_path() . '/img/Logo.png'}}">
        </div>

        <h1>Reporte de seguimientos de mermas</h1><br><br>
        
    
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Fecha</th>
                        <th class="px-4 py-2">Turno</th>
                        <th class="px-4 py-2">Máquina</th>
                        <th class="px-4 py-2">Merma</th>
                        <th class="px-4 py-2">Motivo de descarte</th>
                        <th class="px-4 py-2">Comentarios</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seguimientos_imp as $seguimiento)
                    <tr>
                        <td class="border px-4 py-2">{{ $seguimiento->created_at }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->turno }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->maquina }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->merma }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->motivo_descarte }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->comentarios }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
	</body>
</html>