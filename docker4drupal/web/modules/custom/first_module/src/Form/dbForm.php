<?php

namespace Drupal\first_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class dbForm extends FormBase{
    public function getFormId()
    {
        return "custom form id";
    }
    public static function afterBuild(array $form, FormStateInterface $form_state)
    {
        unset($form['form_token']);
        unset($form['form_build_id']);
        unset($form['form_id']);
        // unset($form[‘search’]);
        return $form;
    }
    public function buildForm(array $form, FormStateInterface $form_state){
       // Kint('working');
        $form_state->setMethod('GET');
        $form['#cache'] = [
            'max-age' => 0,
            ];
        $rowOptions = array(
        '0' => 'Select rows',
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10
        );
        $form['search'] = array(
            '#type' => 'textfield',
            '#title' => 'Search by Name',
            '#default_value' => '',
            // '#value' => $searching
        );
        $form['searchbtn'] = array(
            '#type' => 'submit',
            '#value' => 'Search',
            '#button_type' => 'primary',
            '#name' => ''
            );
            $form['Rows'] = array(
            '#type' => 'select',
            '#title' => 'Rows',
            '#options' => $rowOptions
            );
            $form['save'] = array(
            '#type' => 'submit',
            '#value' => 'set row',
            '#button_type' => 'primary',
            '#name' => ''
        );
            // Add an after build step.
            $form['#after_build'][] = [get_class($this), 'afterBuild'];
            return $form;
  }
  public function submitForm(array &$form, FormStateInterface $form_state)
    {
    }
}