<?php



namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class Todocontroller extends Controller
{
    /**
     * @Route("/",name="todo_list")
     */
    public function listAction() {
       // die('Todos bonjour todos !!  ');
        return $this->render('todo/index.html.twig');
    } 
    /**
     * @Route("/todo/create",name="todo_create")
     */
    public function createAction(Request $request) {
        //die('Todos bonjour !!  ');
        return $this->render('todo/create.html.twig');
    } 
    /**
     * @Route("/todo/edit{id}",name="todo_edit")
     */
    public function editAction(Request $request) {
        //die('Todos bonjour !!  ');
        return $this->render('todo/edit.html.twig');
    } 
    /**
     * @Route("/todo/details",name="todo_details")
     */
    public function detailsAction($id) {
        //die('Todos bonjour !!  ');
        return $this->render('todo/details.html.twig');
    } 
}
