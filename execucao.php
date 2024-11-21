<?php

require_once("modelo/CarroSeguranca.php");
require_once("modelo/CarroCorrida.php");
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
                    $carro->setFabricante(readline("Digite a fabricante do carro: "));
                    $carro->setModelo(readline("Digite o modelo do carro: "));
                    $carro->setCategoria(readline("Digite a categoria em que o carro atua: "));
                    array_push($carros, $carro);

                    echo "\nCarro cadastrado!\n\n";
                    $opcao_carro=0;
                    
                    sleep(1);

                } else if($opcao_carro==2) {

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro=new Formula();
                    $carro->setFabricante(readline("Digite a fabricante do carro: "));
                    $carro->setModelo(readline("Digite o modelo do carro: "));
                    $carro->setMotor(readline("Digite o motor do carro: "));
                    $carro->setAnoEpoca(readline("Digite o ano do seu carro: "));
                    $carro->setEquipe($equipe);
                    
                    array_push($carros, $carro);

                    echo "\nCarro cadastrado!\n\n";
                    $opcao_carro=0;
                    
                    sleep(1);

                } else if($opcao_carro==3) {

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro=new Nascar();
                    $carro->setFabricante(readline("Digite a fabricante do carro: "));
                    $carro->setModelo(readline("Digite o modelo do carro: "));
                    $carro->setMotor(readline("Digite o motor do carro: "));
                    $opcao_setup=readline("Qual o setup do seu carro? (1 - Oval; 2 - Misto): ");
                    if($opcao_setup==1)
                        $carro->setSetup("Oval");
                    else if($opcao_setup==2)
                        $carro->setSetup("Misto");
                    else
                        $carro->setSetup("Indefinido");
                    $carro->setEquipe($equipe);
                    
                    array_push($carros, $carro);

                    echo "\nCarro cadastrado!\n\n";
                    $opcao_carro=0;
                    
                    sleep(1);

                } else if($opcao_carro==4) {

                    $equipe=new Equipe();
                    $equipe->setNome(readline("Digite o nome da equipe: "));
                    $equipe->setPiloto(readline("Digite o nome do piloto: "));

                    $carro=new Hypercar();
                    $carro->setFabricante(readline("Digite a fabricante do carro: "));
                    $carro->setModelo(readline("Digite o modelo do carro: "));
                    $carro->setMotor(readline("Digite o motor do carro: "));
                    $opcao_bop=readline("Como está o balanço de performance do seu carro? (1 - Ruim; 2 - Bom): ");
                    if($opcao_bop==1)
                        $carro->setBop("Ruim");
                    else if($opcao_bop==2)
                        $carro->setBop("Bom");
                    else
                        $carro->setBop("Indefinido");
                    $carro->setEquipe($equipe);
                    
                    array_push($carros, $carro);

                    echo "\nCarro cadastrado!\n\n";
                    $opcao_carro=0;
                    
                    sleep(1);

                }

            } while($opcao_carro!=0);
            break;

        case 2:
            $i=1;
            foreach($carros as $c) {

                if($c instanceof Formula) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nAno: " . $c->getAnoEpoca() . "\n\n";

                } else if($c instanceof Nascar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nSetup: " . $c->getSetup() . "\n\n";

                } else if($c instanceof Hypercar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nBoP: " . $c->getBop() . "\n\n";

                } else{

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nCategoria: " . $c->getCategoria() . "\n\n";

                }

                $i++;
            }
            break;

        case 3:
            $i=1;
            foreach($carros as $c) {

                if($c instanceof Formula) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nAno: " . $c->getAnoEpoca() . "\n\n";

                } else if($c instanceof Nascar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nSetup: " . $c->getSetup() . "\n\n";

                } else if($c instanceof Hypercar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nBoP: " . $c->getBop() . "\n\n";

                } else{

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nCategoria: " . $c->getCategoria() . "\n\n";

                }

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

                if($c instanceof Formula) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nAno: " . $c->getAnoEpoca() . "\n\n";

                } else if($c instanceof Nascar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nSetup: " . $c->getSetup() . "\n\n";

                } else if($c instanceof Hypercar) {

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nMotor: " . $c->getMotor() . "\nNome da equipe: " . $c->getEquipe()->getNome() . "\nPiloto: " . $c->getEquipe()->getPiloto() . "\nBoP: " . $c->getBop() . "\n\n";

                } else{

                    echo "\n\n" . $i . " -\nModelo: " . $c->getModelo() . "\nFabricante: " . $c->getFabricante() . "\nCategoria: " . $c->getCategoria() . "\n\n";

                }

                $i++;
            }

            $opcao_pilotar=readline("Que carro você deseja pilotar?: ");
            $opcao_pilotar--;
            
            $i=1;
            foreach($circuitos as $c) {

                echo "\n\n" . $i . " -\n" . $c->getNomeComum() . "\nNome oficial: " . $c->getNome() . "\nPaís: " . $c->getPais() . "\nExtensão: " . $c->getExtensao() . "km\n\n";

                $i++;

            }

            $opcao_circuito=readline("Em que circuito você deseja pilotar?: ");
            $opcao_circuito--;

            if($carros[$opcao_pilotar] instanceof Formula) {

                if($circuitos[$opcao_circuito]==$interlagos) {

                    echo $carros[$opcao_pilotar]->ligarCarro();
                    sleep(2);

                    echo "\nSeu fórmula de ano " . $carros[$opcao_pilotar]->getAnoEpoca() . " fez um tempo extremamente rápido!\n\n";
                    sleep(2);

                } else if($circuitos[$opcao_circuito]==$daytona) {

                    echo $carros[$opcao_pilotar]->ligarCarro();
                    sleep(2);

                    echo "\nSeu fórmula de ano " . $carros[$opcao_pilotar]->getAnoEpoca() . " ferveu muito por conta do RPM alto por muito tempo, motor perdido (e o carro inteiro)!\n\n";
                    sleep(2);

                    array_splice($carros, $opcao_pilotar, 1);

                } else if($circuitos[$opcao_circuito]==$lemans) {

                    echo $carros[$opcao_pilotar]->ligarCarro();
                    sleep(2);

                    echo "\nSeu fórmula de ano " . $carros[$opcao_pilotar]->getAnoEpoca() . " fez um tempo extremamente rápido, mas escapoup por pouco da morte inúmeras vezes!\n\n";
                    sleep(2);

                }

            } else if($carros[$opcao_pilotar] instanceof Nascar) {

                if($carros[$opcao_pilotar]->getSetup()=="Oval") {

                    if($circuitos[$opcao_circuito]==$interlagos) {

                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " fez um tempo extremamente lento, já que ele não é acostumado a virar para a direita!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$daytona) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " teve uma velocidade média altíssima!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$lemans) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " fez um tempo extremamente lento, já que ele não é acostumado a virar para a direita!\n\n";
                        sleep(2);
    
                    }

                } else {

                    if($circuitos[$opcao_circuito]==$interlagos) {

                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " fez um tempo extremamente decente!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$daytona) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " teve uma velocidade média muito baixa!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$lemans) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Nascar de setup " . $carros[$opcao_pilotar]->getSetup() . " fez um tempo extremamente decente!\n\n";
                        sleep(2);
    
                    }

                }

            } else if($carros[$opcao_pilotar] instanceof Hypercar) {

                if($carros[$opcao_pilotar]->getBop()=="Ruim") {

                    if($circuitos[$opcao_circuito]==$interlagos) {

                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Hypercar de BoP " . $carros[$opcao_pilotar]->getBop() . " fez um tempo bem medíocre para os seus padrões!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$daytona) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nQue combinação é essa, cara?\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$lemans) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Hypercar de BoP " . $carros[$opcao_pilotar]->getBop() . " fez um tempo bem medíocre para os seus padrões, mas se sentiu mais seguro do que pilotando um fórmula!\n\n";
                        sleep(2);
    
                    }

                } else {

                    if($circuitos[$opcao_circuito]==$interlagos) {

                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Hypercar de BoP " . $carros[$opcao_pilotar]->getBop() . " fez um tempo excelente para os seus padrões!\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$daytona) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nQue combinação é essa, cara?\n\n";
                        sleep(2);
    
                    } else if($circuitos[$opcao_circuito]==$lemans) {
    
                        echo $carros[$opcao_pilotar]->ligarCarro();
                        sleep(2);
    
                        echo "\nSeu Hypercar de BoP " . $carros[$opcao_pilotar]->getBop() . " fez um tempo extremamente excelente para os seus padrões!\n\n";
                        sleep(2);
    
                    }

                }

            } else {

                echo $carros[$opcao_pilotar]->ligarCarro();
                sleep(2);

                echo "\nCircuito em segurança!\n\n";
                sleep(2);

            }
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
