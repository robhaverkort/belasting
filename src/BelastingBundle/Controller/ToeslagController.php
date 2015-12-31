<?php

namespace BelastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToeslagController extends Controller {

    /**
     * @Route("/toeslag/{huishouden_id}", name="toeslag_list")
     */
    public function indexAction($huishouden_id) {
        $huishouden = $this->getDoctrine()->getRepository('BelastingBundle:Huishouden')
                ->find($huishouden_id);
        $belastingplichtigen = $this->getDoctrine()->getRepository('BelastingBundle:Belastingplichtige')
                ->findByHuishouden($huishouden);
        $woning = $this->getDoctrine()->getRepository('BelastingBundle:Woning')
                ->findOneByHuishouden($huishouden);
        $kinderen = $this->getDoctrine()->getRepository('BelastingBundle:Kind')
                ->findByHuishouden($huishouden);
        return $this->render('BelastingBundle:Toeslag:index.html.twig', array(
                    'huishouden' => $huishouden,
                    'belastingplichtigen' => $belastingplichtigen,
                    'woning' => $woning,
                    'kinderen' => $kinderen,
        ));
    }

}
