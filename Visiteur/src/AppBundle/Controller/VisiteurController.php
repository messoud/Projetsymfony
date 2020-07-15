<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VisiteurController extends Controller
{
     /**
     * @Route("/",name="visiteur_menu")
     */
    public function visiteAction(Request $request)
    {
        return $this->render('visiteur/visite.html.twig');
    }
       /**
     * @Route("/visiteur",name="visiteur_details")
     */
    public function detailsAction(Request $request)
    {
        return $this->render('visiteur/details.html.twig');
    }
       /**
     * @Route("/visiteur",name="visiteur_visited")
     */
    public function visitAction()
    {
        return $this->render('visiteur/visb.html.twig');
    }
        /**
     * @Route("/visiteur",name="visit_list")
     */
    public function listAction() {
        //die('Todos bonjour !!  ');
        return $this->render('visiteur/note.html.twig');
    }
}

