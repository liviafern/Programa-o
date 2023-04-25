<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array revisao</title>
</head>
<body>
    
    <h1> Array revisão </h1>


    <?php 

        
        echo '<h2> Arrays (explicita) </h2>';

        $listaordenada= array ('livia', 'leticia', 'samuel');

        echo '<pre>'; // quando precisarmos chamar o html ou css termos que colocar o 'echo'
        print_r ($listaordenada);// monstra a posicao e o codigo por dentro
        echo '</pre>'; 

        echo '<h2> Arrays (adicionar) </h2>';
        $listaordenada[]= 'aviao';

        echo '<pre>'; //pre é uma div 
        print_r ($listaordenada);// monstra a posicao e o codigo por dentro
        echo '</pre>'; 
    
        echo '<h2> Arrays (alterar itens) </h2>';
        $listaordenada[]= 'fabio';

        echo '<pre>'; //pre é uma div 
        print_r ($listaordenada);// monstra a posicao e o codigo por dentro
        echo '</pre>';


        echo '<h2> Arrays (implicita) </h2>';
        $listaodernada = [ 
            'livia',
            'leticia',
            'samuel'
        ];

        echo '<pre>'; //pre é uma div 
        print_r ($listaordenada);// monstra a posicao e o codigo por dentro
        echo '</pre>';

    
        echo '<h2> Arrays associativo (key =>valor) </h2>';
        $array= [
            0 => 'camisa',
            1 => 'calca',
            2 => 'sapato',
            3 => 'moletom',
            
        ];
        
        echo '<pre>';
        print_r ($array);
        echo '</pre>';

        echo '<pre>';
        echo  $array[2];


        echo '<h2> Arrays adição de um item </h2>';
        echo '<pre>';
        $array []= "sapato grande";
        print_r ($array);
        echo '</pre>';


        $multitipo = [
            1 => 'livro',
            'dois' => 'capitulo',
            3 => '13/10/2005',
            2 => '25',
            'telefone' => "22222"

        ];

        echo '<pre>';
        print_r ($multitipo);
        echo '</pre>';

        echo '<h2> Arrays multidimenional</h2>';
        $multidimensional= [
            'alunos' => [ 
            
          [
                    'id' => 1,
                    'nome' => 'Luis',
                    'endereco' => 'rua w'
            ],
               [
                'id' => 2,
                'nome' => 'Mari',
                'endereco' => 'rua p'
            ],
                [
                'id' => 3,
                'nome' => 'Edu',
                'endereco' => 'rua o'
            ]  
           
            ]
            ];

            echo '<pre>';
            print_r ($multidimensional['alunos'] [1]);
            echo '</pre>';

    ?>


</body>
</html>