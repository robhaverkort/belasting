<?php

namespace BelastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HuishoudenController extends Controller {

    /**
     * @Route("/huishouden", name="huishouden_list")
     */
    public function indexAction() {
        $repository = $this->getDoctrine()->getRepository('BelastingBundle:Huishouden');
        $huishoudens = $repository->findAll();
        return $this->render('BelastingBundle:Huishouden:index.html.twig', array('huishoudens' => $huishoudens));
    }

    /**
     * @Route("/huishouden/{huishouden_id}", name="huishouden_view")
     */
    public function viewAction($huishouden_id) {
        $huishouden = $this->getDoctrine()->getRepository('BelastingBundle:Huishouden')
                ->find($huishouden_id);
        $belastingplichtigen = $this->getDoctrine()->getRepository('BelastingBundle:Belastingplichtige')
                ->findByHuishouden($huishouden);
        $kinderen = $this->getDoctrine()->getRepository('BelastingBundle:Kind')
                ->findByHuishouden($huishouden);
        $woningen = $this->getDoctrine()->getRepository('BelastingBundle:Woning')
                ->findByHuishouden($huishouden);

        return $this->render('BelastingBundle:Huishouden:view.html.twig', array(
                    'huishouden' => $huishouden,
                    'belastingplichtigen' => $belastingplichtigen,
                    'kinderen' => $kinderen,
                    'woningen' => $woningen
        ));
    }

}
