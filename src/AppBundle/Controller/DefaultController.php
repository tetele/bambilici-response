<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/google", name="google")
     */
    public function googleAction(Request $request)
    {
        $req = json_decode($request->getContent());

        if($req === NULL) {
            throw new Exception('Invalid JSON received');
        }

        do {
            $n = rand(0, pow(10, floor(log10($req->result->parameters->number))+1));
            if($n == $req->result->parameters->number) {
                continue;
            }

            if($n > $req->result->parameters->number) {
                $response = 'I pick '.$n.'. I win!';
            } else {
                $response = 'I pick '.$n.'. You win!';
            }
        } while ($n == $req->result->parameters->number);


        $response = [
            'speech' => $response,
            'displayText' => $response
        ];

        return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
    }
}
