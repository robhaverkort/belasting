<?php

namespace BelastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction(Request $request) {

        $form = $this->createFormBuilder()
                ->add('naam_1', 'text', array('label' => 'naam 1'))
                ->add('bruto_salaris_1', 'text', array('label' => 'bruto salaris 1'))
                ->add('naam_2', 'text', array('label' => 'naam 2'))
                ->add('bruto_salaris_2', 'text', array('label' => 'bruto salaris 2'))
                ->add('eigenwoning_woz', 'text', array('label' => 'EigenWoning WOZ'))
                ->add('eigenwoning_rente', 'text', array('label' => 'EigenWoning Rente'))
                ->add('save', 'submit', array('label' => 'Bereken'))
                ->getForm();

        $form->handleRequest($request);

        $data = array();
        $data['naam_1'] = $form['naam_1']->getData();
        $data['naam_2'] = $form['naam_2']->getData();
        $data['bruto_salaris_1'] = $form['bruto_salaris_1']->getData();
        $data['bruto_salaris_2'] = $form['bruto_salaris_2']->getData();

        $data['eigenwoning_woz'] = $form['eigenwoning_woz']->getData();
        $data['eigenwoning_rente'] = $form['eigenwoning_rente']->getData();
        $data['eigenwoning_forfait'] = 0;
        if ($data['eigenwoning_woz'] > 12500) {
            $data['eigenwoning_forfait'] = 0.0030 * $data['eigenwoning_woz'];
        }
        if ($data['eigenwoning_woz'] > 25000) {
            $data['eigenwoning_forfait'] = 0.0045 * $data['eigenwoning_woz'];
        }
        if ($data['eigenwoning_woz'] > 50000) {
            $data['eigenwoning_forfait'] = 0.0060 * $data['eigenwoning_woz'];
        }
        if ($data['eigenwoning_woz'] > 75000) {
            $data['eigenwoning_forfait'] = 0.0075 * $data['eigenwoning_woz'];
        }
        if ($data['eigenwoning_woz'] > 1050000) {
            $data['eigenwoning_forfait'] = 7875 + 0.0205 * ($data['eigenwoning_woz'] - 1050000);
        }
        $data['eigenwoning_opbrengst'] = $data['eigenwoning_forfait'] - $data['eigenwoning_rente'];

        $data['belastbaar_1'] = $data['bruto_salaris_1'] + $data['eigenwoning_opbrengst'];
        $data['belastbaar_2'] = $data['bruto_salaris_2'];

        $data['belastbaar_schijf1_1'] = min($data['belastbaar_1'], 19822);
        $data['belastbaar_schijf2_1'] = max(0, min($data['belastbaar_1'] - 19822, 33589 - 19822));
        $data['belastbaar_schijf3_1'] = max(0, min($data['belastbaar_1'] - 33589, 57585 - 33589));
        $data['belastbaar_schijf4_1'] = max(0, $data['belastbaar_1'] - 57585);
        $data['loonbelasting_schijf1_1'] = $data['belastbaar_schijf1_1'] * 0.0835;
        $data['loonbelasting_schijf2_1'] = $data['belastbaar_schijf2_1'] * 0.1385;
        $data['loonbelasting_schijf3_1'] = $data['belastbaar_schijf3_1'] * 0.4200;
        $data['loonbelasting_schijf4_1'] = $data['belastbaar_schijf4_1'] * 0.5200;

        $data['belastbaar_schijf1_2'] = min($data['belastbaar_2'], 19822);
        $data['belastbaar_schijf2_2'] = max(0, min($data['belastbaar_2'] - 19822, 33589 - 19822));
        $data['belastbaar_schijf3_2'] = max(0, min($data['belastbaar_2'] - 33589, 57585 - 33589));
        $data['belastbaar_schijf4_2'] = max(0, $data['belastbaar_2'] - 57585);
        $data['loonbelasting_schijf1_2'] = $data['belastbaar_schijf1_2'] * 0.0835;
        $data['loonbelasting_schijf2_2'] = $data['belastbaar_schijf2_2'] * 0.1385;
        $data['loonbelasting_schijf3_2'] = $data['belastbaar_schijf3_2'] * 0.4200;
        $data['loonbelasting_schijf4_2'] = $data['belastbaar_schijf4_2'] * 0.5200;

        $data['belastbaar_aow_1'] = min(33858, $data['belastbaar_1']);
        $data['premie_aow_1'] = 0.1790 * $data['belastbaar_aow_1'];
        $data['belastbaar_aow_2'] = min(33858, $data['belastbaar_2']);
        $data['premie_aow_2'] = 0.1790 * $data['belastbaar_aow_2'];

        $data['belastbaar_anw_1'] = min(33858, $data['belastbaar_1']);
        $data['premie_anw_1'] = 0.0060 * $data['belastbaar_anw_1'];
        $data['belastbaar_anw_2'] = min(33858, $data['belastbaar_2']);
        $data['premie_anw_2'] = 0.0060 * $data['belastbaar_anw_2'];

        $data['belastbaar_wlz_1'] = min(33858, $data['belastbaar_1']);
        $data['premie_wlz_1'] = 0.0965 * $data['belastbaar_wlz_1'];
        $data['belastbaar_wlz_2'] = min(33858, $data['belastbaar_2']);
        $data['premie_wlz_2'] = 0.0965 * $data['belastbaar_wlz_2'];

//return $this->redirectToRoute('task_success');
        if ($form->isSubmitted() && $form->isValid()) {
            
        }

        return $this->render('BelastingBundle:Default:index.html.twig', array('form' => $form->createView(), 'data' => $data));
    }

    private function loonbelasting($belastbaar) {
        return 0;
    }

    private function premieaow($belastbaar) {
        return 0.1790 * min(33858, $belastbaar);
    }

    private function premieanw() {
        return 0.0060 * min(33858, $belastbaar);
    }

    private function premiewlz() {
        return 0.0965 * min(33858, $belastbaar);
    }

    private function algemeneheffingskorting($belastbaar) {
        return 0;
    }

    private function arbeidskorting() {
        return 0;
    }

    private function werkbonus() {
        return 0;
    }

    private function combinatiekorting() {
        return 0;
    }

}
