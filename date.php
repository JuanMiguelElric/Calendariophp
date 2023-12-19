<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia <?php echo date('d'); ?> </title>
    <style>
        body{background-color: #4d1933;}
        h1,p{
            font-size: 5rem;
            text-align: center;
            color: #d9b3ff;
        }
        table{
            margin-left: auto;
            margin-right: auto;
            
        }
        th,td{
            font-size: 3rem;
            
        }
        table, th, td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        th, td{
            padding: 10px;
            text-align: center;
            width: 120px;
        }
        td{
            color: red;
            background-color: #ffb3b3;
        }

        th{
            font-weight: bold;
            color: #fff;
            background-color: #800000;
        }


        tr:nth-child(even) {
            background-color: #DCEBE6;
        }

        tr:hover:nth-child(1n + 2) {
            background-color: #085F63;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <h1>Estamos em <?php echo date('Y')?></h1>
    <p> Agora são <?php echo date('H')?>horas e <?php echo date('i')?></p>
    <table>
        <tr>
            <th>Domingo</th>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
            <th>Sabado</th>
        </tr>
        <?php Calendario(); ?>
    </table>
    <?php
            function Linha($seman)
            {
                echo "<tr>";
                for($i=0; $i <= 6; $i++){
                    if(isset($seman[$i])){
                        echo "<td>{$seman[$i]}</td>";
                    } else{
                        echo "<td></td>";
                    }
                }
                echo"</tr>";
            }
            function Calendario()
            {
                $dia =1;
                $seman =array();
                while ($dia <=31){
                    array_push($seman, $dia);
                    if(count($seman)==7){
                        Linha($seman);
                        $seman = array();
                    }
                    $dia++;
                }
                Linha($seman);
            }
        
    ?>
    
</body>
</html>