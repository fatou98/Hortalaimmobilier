<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReservationController extends Controller
{
     public function accueilAction(){
                        
                        return $this->render('HTLImmobilierBundle:Reservation:accueil.html.twig', array());

         }
}
