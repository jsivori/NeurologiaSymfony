<?php

namespace Neurologia\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$user = 'admin';
		$password = 'admin';
		
		$em = $this->getDoctrine()->getManager();
		$repositorio = $em->getRepository('NeurologiaFirstBundle:Usuario');
		
		$usuario = $repositorio->findOneBy(array('username'=>$user,'password'=>$password));
		if($user){
        	return $this->render('NeurologiaFirstBundle:Default:index.html.twig', array('parametro'=>$usuario->getUsername()));
		}
		else{
			return $this->render('NeurologiaFirstBundle:Default:index.html.twig', array('parametro'=>'Login Fallido'));
		}
    }
	
	public function backendAction($name)
    {
        return $this->render('NeurologiaFirstBundle:Default:backend.html.twig', compact('name'));
    }
}
