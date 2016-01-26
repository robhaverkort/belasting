<?php

namespace BelastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SalarisController extends Controller {

    /**
     * @Route("/{jaar}/salaris/{huishouden_id}", name="salaris_view")
     */
    public function viewAction($jaar,$huishouden_id) {
        $huishouden = $this->getDoctrine()->getRepository('BelastingBundle:Huishouden')
                ->find($huishouden_id);
        $belastingplichtigen = $this->getDoctrine()->getRepository('BelastingBundle:Belastingplichtige')
                ->findByHuishouden($huishouden);
        return $this->render('BelastingBundle:Salaris:view.html.twig', array(
                    'huishouden' => $huishouden,
                    'belastingplichtigen' => $belastingplichtigen,
        ));
    }

}
