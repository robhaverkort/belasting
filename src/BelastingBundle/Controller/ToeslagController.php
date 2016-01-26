<?php

namespace BelastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToeslagController extends Controller {

    /**
     * @Route("/{jaar}/toeslag/{huishouden_id}", name="toeslag_list")
     */
    public function indexAction($jaar, $huishouden_id) {
        $huishouden = $this->getDoctrine()->getRepository('BelastingBundle:Huishouden')
                ->find($huishouden_id);

        return $this->render('BelastingBundle:Toeslag:index.html.twig', array(
                    'huishouden' => $huishouden
        ));
    }

}
