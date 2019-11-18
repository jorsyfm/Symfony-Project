<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RepositoryController extends AbstractController
{
    /**
     * @Route("/repository/{owner}/{name}", name="repository")
     */
    public function index($owner, $name)
    {
        // $url = $this->generateUrl( 'repository', [
        //     'owner' => 'test',
        //     'name' => 'foo',
        //     'more' => 'qwer',
        // ]);
        // var_dump($url);
        // return $this->render('repository/index.html.twig', [
        //     'controller_name' => 'RepositoryController',
        // ]);
        // if ($owner == '123') {
        //     return new Response('Redirección exitosa', 200);
        // }
        // return $this->redirectToRoute('repository', [
        //     'owner' => '123',
        //     'name' => 'ksdh'
        // ]);
        throw $this->createNotFoundException('Repositorio no encontrado');
    }
}
