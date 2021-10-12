<?php
include "Bot.php";
$bot = new Bot;
$questions = [

	//Delivery
    "1" => "Hacemos delivery a todo Lima y Provincias. El costo depende del peso. 1kg cuesta s/15",
	//Servicios
    "2" => "Contamos con los siguientes servicios: <br>a. Arma tu PC <br>b. Delivery <br>c. Asistencia",
	//Entrega incompleta de tu pedido
    "3" => "Si la entrega de tu pedido está incompleta, puedes comunicarte con uno de nuestros empleados al +51 987654321",
	//Tu producto presenta daño
    "4" =>"Los productos cuentan con garantía de un año dependiendo del proveedor. Envía tu queja mediante la bandeja adjuntando una foto del daño y un encargado te llamará entre las 2pm - 6pm del día.",
	//Solicitar instalación o armado
    "5" =>"Puedes comunicarte directamente desde el apartado 'Servicios' para una charla directa con el área de armado de PC" ,
    //Nombre
    "como te llamas?" =>"Soy Blue y estoy para servirte",
	"que es un bot?" => "Los bot de charla o bot conversacional, ​ son aplicaciones software que surgen en los años 60, y que simulan mantener una conversación con una persona al proveer respuestas automáticas, las cuales son previamente establecidas por un conjunto de expertos a entradas realizadas por el usuario.",

    //saludo
    "hola" =>"Hola, ¿Qué tal?",
    "un saludo" =>"¿Cómo te va?",
    "hello" =>"Un gusto de verte",
    //Sobre el bot
    "tu nombre es?" => "Mi nombre es Blue",
    "tu eres?" => "Yo soy un bot"
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, no puedo ayudarte. Comunícate a Servicio al Cliente para más información");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
