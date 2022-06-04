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

            table{
                font-size: 9px;
                text-align: left;
            }

        </style>

    </head>
    <body>

    	<div class="logo">
                <img src="{{ public_path() . '/img/Logo.png'}}">
        </div>

        <h1>Validación de mermas</h1><br><br>
        
    
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Fecha</th>
                        <th class="px-4 py-2">Analista</th>
                        <th class="px-4 py-2">Turno</th>
                        <th class="px-4 py-2">Grupo</th>
                        <th class="px-4 py-2">Maquina</th>
                        <th class="px-4 py-2">Tintas</th>
                        <th class="px-4 py-2">ODC</th>
                        <th class="px-4 py-2">Codigo</th>
                        <th class="px-4 py-2">Producción</th>
                        <th class="px-4 py-2">Merma</th>
                        <th class="px-4 py-2">Rechazados</th>
                        <th class="px-4 py-2">Motivo Descarte</th>
                        <th class="px-4 py-2">Comentarios</th>
                        <th class="px-4 py-2">Operador</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mermas_imp as $merma)
                    <tr>
                        <td class="border px-4 py-2">{{ $merma->created_at }}</td>
                        <td class="border px-4 py-2">{{ $merma->nombre_analista }}</td>
                        <td class="border px-4 py-2">{{ $merma->turno }}</td>
                        <td class="border px-4 py-2">{{ $merma->grupo }}</td>
                        <td class="border px-4 py-2">{{ $merma->maquina }}</td>
                        <td class="border px-4 py-2">{{ $merma->tintas }}</td>
                        <td class="border px-4 py-2">{{ $merma->orden_produccion }}</td>
                        <td class="border px-4 py-2">{{ $merma->codigo_producto }}</td>
                        <td class="border px-4 py-2">{{ $merma->produccion }}</td>
                        <td class="border px-4 py-2">{{ $merma->merma }}</td>
                        <td class="border px-4 py-2">{{ $merma->rechazados }}</td>
                        <td class="border px-4 py-2">{{ $merma->motivo_descarte }}</td>
                        <td class="border px-4 py-2">{{ $merma->comentarios }}</td>
                        <td class="border px-4 py-2">{{ $merma->codigo_operador }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
	</body>
</html>