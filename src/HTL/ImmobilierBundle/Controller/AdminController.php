<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HTL\ImmobilierBundle\Entity\Bien;
use HTL\ImmobilierBundle\Entity\Typebien;
use HTL\ImmobilierBundle\Entity\Localite;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin/login")
     */
    public function logAction()
    {
        return $this->render('HTLImmobilierBundle:Admin:log.html.twig', array(
            // ...
        ));
    }
    
     public function listBienAction()
        {
            $em = $this->getDoctrine()->getManager();
            $bien= $em->getRepository(Bien::class)->FindAll();
            return $this->render('HTLImmobilierBundle:Admin:liste_bien.html.twig', array(
                'biens' => $bien,
            //...
            ));
        }
        public function addlocaliteAction(Request $request){
          $em = $this->getDoctrine()->getManager();
            $Localite= $em->getRepository(Localite::class)->FindAll();
            if($request->isMethod('POST')){
                    extract($_POST);
             //var_dump($libelle);die();
                $localite=new Localite();
                $localite->setLibellelocalite($libelle);
                  $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($localite);
                    $entityManager->flush();
            //$typebien = $entityManager->getRepository(Typebien::class);
            }
         return $this->render('HTLImmobilierBundle:Admin:liste_localite.html.twig',array(
                              'Localites' => $Localite,    
)
        );
    }
     public function addtypebienAction(Request $request){
         $em = $this->getDoctrine()->getManager();
            $libelletype= $em->getRepository(Typebien::class)->FindAll();
       if($request->isMethod('POST')){
            
                    extract($_POST);
             //var_dump($libelle);die();
                $typebien=new Typebien();
                $typebien->setLibelletype($libelle);
                  $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($typebien);
                    $entityManager->flush();
            //$typebien = $entityManager->getRepository(Typebien::class);
            }
         return $this->render('HTLImmobilierBundle:Admin:liste_typebien.html.twig',array(
                                    'libelletypes' => $libelletype,

)
        );
    }
    public function addbienAction(Request $request){
        
         return $this->render('HTLImmobilierBundle:Admin:addbien.html.twig',array(

)
        );
    }
   

}
