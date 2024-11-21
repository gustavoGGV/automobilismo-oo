<?php

require_once("modelo/CarroSeguranca.php");
require_once("modelo/Carro.php");
require_once("modelo/Equipe.php");
require_once("modelo/Formula.php");
require_once("modelo/Nascar.php");
require_once("modelo/Hypercar.php");
require_once("modelo/Circuito.php");
require_once("modelo/Equipe.php");

$interlagos=new Circuito("Interlagos", "Autódromo José Carlos Pace", "Brasil", 4.309);
$daytona=new Circuito("Daytona", "Daytona International Speedway", "Estados Unidos", 4.2);
$lemans=new Circuito("Le Mans", "Circuit de La Sarthe", "França", 13.626);

$circuitos=array($interlagos, $daytona, $lemans);

$carros=array();

$opcao = 0;
do {

    echo "\n-----------MENU-----------\n";
    echo "| 1 - Cadastrar carro     |\n";
    echo "| 2 - Listar carros       |\n";
    echo "| 3 - Deletar carro       |\n";
    echo "| 4 - Pilotar carro       |\n";
    echo "| 5 - Listar circuitos    |\n";
    echo "| 0 - SAIR                |\n";
    echo "-----------MENU-----------\n";

    $opcao=readline("Escolha a opção: ");

    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            do {

                echo "\n-----------MENU-----------\n";
                echo "| 1 - Carro de Segurança  |\n";
                echo "| 2 - Fórmula             |\n";
                echo "| 3 - Nascar              |\n";
                echo "| 4 - Hypercar            |\n";
                echo "-----------MENU-----------\n";

                $opcao_carro=readline("Escolha o tipo de carro: ");

                //carro de segurança não tem equipe

                if($opcao_carro==1) {

                    $carro=new CarroSeguranca();

                    $equipe=new Equipe();
                    $equipe->setNome(" - ");
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));
                    
                    $carro->setEquipe($equipe);

                    $carro->setCategoria(readline("Digite a categoria em que o carro atua: "));

                } else if($opcao_carro==2) {

                    $carro=new Formula();

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro->setEquipe($equipe);

                    $carro->setAno(readline("Digite o ano do seu carro: "));

                } else if($opcao_carro==3) {

                    $carro=new Nascar();

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro->setEquipe($equipe);

                    $opcao_setup=readline("Qual o setup do seu carro? (1 - Oval; 2 - Misto): ");
                    if($opcao_setup==1)
                        $carro->setSetup("Oval");
                    else if($opcao_setup==2)
                        $carro->setSetup("Misto");
                    else
                        $carro->setSetup("Indefinido");

                } else if($opcao_carro==4) {

                    $carro=new Hypercar();

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro->setEquipe($equipe);

                    $opcao_bop=readline("Como está o balanço de performance do seu carro? (1 - Ruim; 2 - Bom): ");
                    if($opcao_bop==1)
                        $carro->setBop("Ruim");
                    else if($opcao_bop==2)
                        $carro->setBop("Bom");
                    else
                        $carro->setBop("Indefinido");

                }

                $carro->setFabricante(readline("Digite a fabricante do carro: "));
                $carro->setModelo(readline("Digite o modelo do carro: "));
                $carro->setMotor(readline("Digite o motor do carro: "));

                array_push($carros, $carro);

                echo "\nCarro cadastrado!\n\n";
                $opcao_carro=0;
                
                sleep(1);


            } while($opcao_carro!=0);
            break;

        case 2:
            $i=1;
            foreach($carros as $c) {

                echo "\n\n" . $i . " -\n";

                echo $c;

                $i++;

            }
            break;

        case 3:
            $i=1;
            foreach($carros as $c) {

                echo "\n\n" . $i . " -\n";

                echo $c;

                $i++;
                
            }

            $opcao_deletar=readline("Que carro você deseja deletar?: ");
            $opcao_deletar--;

            array_splice($carros, $opcao_deletar, 1);

            echo "\nCarro deletado!\n\n";
            break;

        case 4:
            $i=1;
            foreach($carros as $c) {

                echo "\n\n" . $i . " -\n";

                echo $c;

                $i++;
                
            }

            $opcao_pilotar=readline("Que carro você deseja pilotar?: ");
            $opcao_pilotar--;
            
            $i=1;
            foreach($circuitos as $c) {

                echo "\n\n" . $i . " -\n";

                echo $c;

                $i++;

            }

            $opcao_circuito=readline("Em que circuito você deseja pilotar?: ");
            $opcao_circuito--;

            echo $carros[$opcao_pilotar]->ligarCarro();
            sleep(2);

            echo $carros[$opcao_pilotar]->pilotarCarro($circuitos, $opcao_circuito);
            sleep(2);
            break;

        case 5:
            $i=1;
            foreach($circuitos as $c) {

                echo "\n\n" . $i . " -\n" . $c->getNomeComum() . "\nNome oficial: " . $c->getNome() . "\nPaís: " . $c->getPais() . "\nExtensão: " . $c->getExtensao() . "km\n\n";

                $i++;

            }
            break;
        
        default:
            echo "Opção INVÁLIDA!\n";

    }

} while ($opcao != 0);
