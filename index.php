<?php 
    $valor = ['Snake1'=>[155,1966], 'Snake2'=>[345, 1991], 'Snake3'=>[80,1972], 'Snake4'=>[34,1995], 'Snake5'=>[560,2001]];
    date_default_timezone_set('America/Sao_Paulo');
    $d = (int)date("Y");
    $acao = []; 
    while (count($acao)<=7){
        $cents = rand(1,99);
        if (count($acao)<=1){
            $acao[] = rand(1000,10000)+($cents/100);
        } else{
            $acao[] = rand(10,756)+($cents/100);
        }
    }
    $data = date('g:i a j F Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <link rel="icon" href="./src/img/cobrinha.gif">
    <link rel="script"href="./src/jaja/jaja.js">
    <link rel="stylesheet" href="./src/style/padrao.css">
    <link rel="stylesheet" href="./src/style/css.css">
    <link rel="script" href="./src/php/pp.php">
    <!--  -->
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NL:wght@100..400&display=swap" rel="stylesheet">
    <!--  -->
    <title>Piton</title>
</head>
<body>
    <header>
        <div class="gatu">
            <h1>Compre já o seu piton!</h1>
            <div>
                <div>
                    <img src="./src/img/miau.gif" alt="Gatinho!" width="170px">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div>
            <h2>Boas vindas à loja Piton!</h2>
            <p>Como podemos te ajudar?</p>
        </div>
        <section>
            <div>
                <div>
                    <h3>Cobras a venda! Não perca!</h3>
                    <div>
                        <h4>Hank|M</h4>
                        <ul>
                            <li>Nome: Hank</li>
                            <li>Idade: <?php echo $d -$valor['Snake1'][1]?></li>
                            <li>Proteção</li>
                            <li>Preço: <?php echo $valor['Snake1'][0]?></li>
                        </ul>
                        <p>Este tem caráter de policial! Nascido no seco solo do Sertão, esta píton aprendeu com pessoas que aprenderam como Lampião a artimanha de espalhar a justça pelo Sertão, algo como dente por dente e olho por olho pelos Babilônicos. Tendo esta em sua casa, ladrões não serão mais problemas, a menos que você não se preocupe com o sistema judiciário, pois esta carinha faz um trbalho tão bom que é considerado ilegal pela lei, ela engole, por completo, os assaltantes sem ao menos dar chance de contra-atacar. Bem, caso tenha interrese, clique no majestoso botão abaixo</p>
                    </div>
                    <div>
                        <h4>Pyton|M</h4>
                        <ul>
                            <li>Nome: Pyton</li>
                            <li>Idade: <?php echo $d-$valor['Snake2'][1]?></li>
                            <li>Ensino[inicial|intermediário]</li>
                            <li>Preço: <?php echo $valor['Snake2'][0]?></li>
                        </ul>
                        <p>Originária de um exerimento cientifíco, o Python pode ser o professor ideal para jovens curiosos. Ele é como a professora chata, velha e mau agradecida do 7 ano-3º, porém o total oposto dos adjetivos negativos. Pode ensinar o básico e o intermediário de forma certeira, aberto para novos alunos. Ela ensina tão bem, que muitos jovens já saiem por aí pensando saber mais que os alunos do professor Cê. Hahahah, mau sabe eles o que não sabem!</p>
                    </div>
                    <div>
                        <h4>Cê</h4>
                        <ul>
                            <li>Nome: Cê</li>
                            <li>Idade: <?php echo $d-$valor['Snake3'][1]?></li>
                            <li>Ensino[Avançado]</li>
                            <li>Preço: <?php echo $valor['Snake3'][0]?></li>
                        </ul>
                        <p>Resultante da seleção artificial feita pela Pítons.SA, o Cê veio para inovar o mundo. Este, diferente do seu experimento Python, não é tão amigável aos iniciantes. Ele os aceita de bom grado, porém, se perderem o ritmo da aprendizagem, vai deles correrem atrás disso. Este carinha é o ideal para quem ir além no mundo</p>
                    </div>
                    <div>
                        <h4>Jajá</h4>
                        <ul>
                            <li>Nome: Jajá</li>
                            <li>Idade: <?php echo $d-$valor['Snake4'][1]?></li>
                            <li>Maloqueiro</li>
                            <li>Preço <?php echo $valor['Snake4'][0]?></li>
                        </ul>
                        <p>Este nasceu para inovar o mundo, porém, diferentes de seus irmãos, Pyton e Cê, este seguiu o lado negro das Pítons. Nascido de um experimento de jovens estudantes da Píton.SA, o Jajá tinha um futuro promissor. É bom da manipulae objetos e fazer coisas quadráticas, entretanto pesímo de conta. Em sua cabeça 1+1='11', mas deixemos isso de lado. O que levou ele ao lado negro das Pítons foi a sua determinação por objetos e hardware de uma forma toturosa ao humanos, ele aprendeu todos os caminhos nescessários para o suscesso mas foi corrompido pelo instito da complexidade. Bem, caso seja masoquista, essa píton foi feita para você!</p>
                    </div>
                    <div>
                        <h4>Pampam|F</h4>
                        <ul>
                            <li>Nome: Pampam</li>
                            <li>Idade: <?php echo $d-$valor['Snake5'][1]?></li>
                            <li>NPC</li>
                            <li>Preço <?php echo $valor['Snake5'][0]?></li>
                        </ul>
                        <p>Caso nenhuma das pítons acima tenha interresado-lhe, a píton Pampam é uma típica píton que você enontra no meio da rua quando está indo ao mercadinho</p>
                    </div>
                    <h2>
                        (Parcele em até 36x sem juros!)
                    </h2>
                </div>
                <div>
                    <h3>Uma breve história sobre nós...</h3>
                    <p>A idéa da Loja Piton vem de um devaneio de Carlos Magnum após uma noite de muita bebedeira, mulheres, diversão e filosófia. Carlos Magnum era um típico senhorzinho aposetado, mas ainda trabalhador, das Terras do interior de Minas. Há pouco tempo ele havia se mudado, por conta da construção da rodovia BR-040, á cidade grande, porém ainda sentia falta da roça, especialmente pela vida pacata de meu Deus e da sua pequena, mas acolchequante, casita. Filho de descedentes de italianos e africanos que se perderam na mata, Carlos Magnum teve dificuldades de se adapatar a cidade grande, não tinha amigos nem família e os únicos com os quais poderia conversar sem ser julgado foram os amigos que fez foi nos bares de BH. Desta forma, Magnum passou a berber e, conforme os dias e as noites se passavam, mais e mais bebia, tudo isto para se esquecer de sua trise realidade. Passva o dia todo de resaca e a noite nos bares. Isso perdurou por algumas semanas, até que ele teve a revelação. Era uma típica noite, mais uma vez de se embreagar nos bares da esquina, e assim fez. Era costume chamar a atenção pela reflexões profundas e tristes, ao melhor modo Nietzsche, que proclamava enquanto bebâdo. Nesta noite, ele refletiu sobre como o governo agiu como uma cobra, mais especificadamente, uma píton, engolindo a sua adorável casa e, levando junto, toda a sua vida, para, logo em seguida, o soltar, pela porta dos fundos, um morto não declarado. Após essa epifania, pansou na sua cabeça a idéia em acabar com tudo de uma vez, entretanto ele tinha uma última tarefa neste mundo, contar a alguém o que sua voz interior dizia. Não demorou muito para ver um jovem garçom ali, ele o chamou e fez o que deveria fazer. Tão logo, pediu uma garrafa de Whisky 40%. A pegou e virou. O óbito já era questão de tempo. Ninguém, além do jovem Garçom, apareceu no funeral de Carlos. O garçom, chamado Robert, faria o que Carlos queria tanto fazer, uma loja de pítons. E assim fez! Carlos estaria muito orgulhoso do que ela se tranformou. Hoje, os valores das ações Pítons.SA se encontram na casa dos 4 dígitos, além da Loja Píton, ou Pítons.SA, ser a pioneira no aumento da população de pítons na natureza e em ambientes controlados, assim como tornou este animais menos agressivos, mais inteligentes, a ponto de entenderem o seu próprio nome, comandos e executar tarefas, e, para finalizar, a moeda piton se encontra negociável nos dias atuais, prometendo se a moeda do futuro!</p>
                </div>
            </div>
            <div>
                <div>
                    <h3>Dados econômicos da Píton.SA e outras filais</h3>
                    <div>
                        <h3>Dados referentes ao dia <?php echo $data?></h3>
                        <div>
                            <div>
                                <h4>Píton.SA</h4>
                                <p><?echo $acao[0]?>R$</p>
                            </div>
                            <div>
                                <h4>Lojas Píton</h4>
                                <p><?php echo $acao[2]?>R$</p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h4>Tec.Píton</h4>
                                <p><?php echo $acao[4]?>R$</p>
                            </div>
                            <div>
                                <h4>Evolution.Píton</h4>
                                <p><?php echo $acao[6]?>R$</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3>Dados referentes à semana passada</h3>
                        <div>
                            <div>
                                <h4>Píton.SA</h4>
                                <p><?echo $acao[1]?>R$</p>
                            </div>
                            <div>
                                <h4>Lojas Píton</h4>
                                <p><?php echo $acao[3]?>R$</p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h4>Tec.Píton</h4>
                                <p><?php echo $acao[5]?>R$</p>
                            </div>
                            <div>
                                <h4>Evolution.Píton</h4>
                                <p><?php echo $acao[7]?>R$</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Píton.SA</h3>
                    <div>
                        <div>
                            <h4>Píton.SA</h4>
                            <p>Dada de fundação: 26/02/2008</p>
                            <p>Valor das ações: <?php echo $acao[0]?>R$</p>
                        </div>
                        <div>
                            <h4>Lojas Píton</h4>
                            <p>Data de fundação: 17/04/1991</p>
                            <p>Valor das ações: <?php echo $acao[2]?>R$</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>Tec.Píton</h4>
                            <p>Data de fundação: 08/10/2007</p>
                            <p>Valor das ações: <?php echo $acao[4]?>R$</p>
                        </div>
                        <div>
                            <h4>Evolution.Píton</h4>
                            <p>Data de fundação: 14/06/2010</p>
                            <p>Valor das ações: <?php echo $acao[6]?>R$</p>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </main>
</body>
</html>