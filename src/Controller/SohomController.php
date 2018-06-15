<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SohomController extends Controller
{
    /**
     * @Route("/sohom", name="sohom")
     */
    public function index()
    {
	$number = random_int(0, 100);
        return $this->render('sohom/index.html.twig', [
            'controller_name' => 'SohomController',
		'ln' => $number,
        ]);
    }
}
