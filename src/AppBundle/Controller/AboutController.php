<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    /**
     * @Route("/about")
     */
    public function About()
    {
        $name = array("Name" => "Анастасия");
        $surname = array("Surname" => "Еремина");
        $birthday = array("Birthday" => "06.11.1998");
        $edu = array("Education" => "SGU FNP");
        return $this->render('default\about.html.twig', array(
                       'name' => $name,'surname' => $surname, 'birthday' => $birthday, 'edu' => $edu
                   ));
    }
}
