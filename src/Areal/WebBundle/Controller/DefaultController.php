<?php

namespace Areal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArealWebBundle:Default:index.html.twig');
    }

    public function contactoAction()
    {
    	return $this->render('ArealWebBundle:Default:contacto.html.twig');	
    }

    public function envioFormContactoAction(Request $request)
    {
    	$nombre 	= $request->request->get('nombre', '');
		$telefono 	= $request->request->get('telefono', '');
		$mail 		= $request->request->get('mail', '');
		$texto	 	= $request->request->get('mensaje', '');;
		$texto 		= wordwrap($texto, 70, "\r\n"); //Las lineas no tienen que ocupar mas de 70 caracteres.
		$texto 		= str_replace("\n.", "\n..", $texto); //En windows si se encuenta un punto inicial se elimina. Para evitarlo reemplazamos con un doble punto


		$para		= 'arealsl@arealsl.es';
		$titulo		= 'Petición desde www.arealsl.es';
		$mensaje	= 'Nombre:   '.$nombre."\r\n";
		$mensaje	.='Teléfono: '.$telefono."\r\n";
		$mensaje	.='Mail:     '.$mail."\r\n"."\r\n"."\r\n";
		$mensaje	.=$texto;
		$cabeceras	= "From: ".$nombre." ".$mail. "\r\n" .
			"Reply-to: ".$mail."\r\n".
		    'X-Mailer: PHP/' . phpversion();

		if(mail($para, $titulo, $mensaje, $cabeceras)){
			return new Response('OK');
		}else{
			return new Response('ERROR');
		}
    }
}
