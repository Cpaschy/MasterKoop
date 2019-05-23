<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    /*public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@pages/default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }*/
    public function indexAction()
    {
        return $this->render('@layout/pages/default/index.html.twig');
    }
    public function catalogueAction()
    {
        return $this->render('@pages/full/catalogue.html.twig');
    }

    public function connexionAction()
    {
        return $this->render('@pages/full/connexion.html.twig');
    }

    public function inscriptionAction()
    {
        return $this->render('@pages/full/inscription.html.twig');
    }

    public function newsAction()
    {
        return $this->render('@pages/full/news.html.twig');
    }

    public function visionnageAction()
    {
        return $this->render('@pages/full/visionnage.html.twig');
    }

}
