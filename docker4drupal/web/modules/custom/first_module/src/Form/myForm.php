<?php

namespace Drupal\first_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Render\Element\Value;
use Drupal\devel\Plugin\Devel\Dumper\Kint;
use LengthException;

/**
 * 
 */

class myForm extends FormBase
{
    public function getFormId()
    {
        return "custom form id";
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        //Kint($form['candidate_name']);
        $form['candidate_name'] = array(
            '#type' => 'textfield',
            '#title' => t('Candidate Name:'),
            //'#required' => TRUE,
        );
        $form['candidate_mail'] = array(
            '#type' => 'email',
            '#title' => t('Email ID:'),
            //'#required' => TRUE,
        );
        $form['Age'] = array(
            '#type' => 'number',
            '#title' => t('Age'),
            //'#required' => TRUE,
        );
        // $form['Maturity'] = array(
        //     '#type' => 'textfield',
        //     '#title' => t('Candidate Maturity'),
        //     '#required' => TRUE,
        // );
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
        );
        //$query = \Drupal::database();
        //$result = $query->select('dev', 'd')->fields('d', ['uid', 'name', 'age'])->execute();
        //Kint($result);
        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        //die();
    }
    //public function getuserlist(){
    // Kint("chala");
    // $query= \Drupal::database();
    // $result= $query->select('dev','d')->fields('d',['uid','name','age'])->execute()->fetchAssoc(\PDO::FETCH_OBJ);
    // Kint($result);

    //}
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        //Kint('working!');
        $name = $form_state->getValue('candidate_name');
        $length= strlen($name);
        //Kint($length);
        for($i=0;$i<$length;$i++){
            //Kint($i);
            $char=$name[$i];
            //Kint($char);
            $ch=ord($char);
            //Kint($ch);
            for($j=0;$j<=9;$j++){
                //Kint(ord($j));
                if($ch==ord($j)){
                    $form_state->setErrorByName($name="candidate_name", $message= "Username should have alphabetical characters only.");
                }
            }
        }
        $age= $form_state->getValue(('Age'));
        if($age<=0 || $age>125){
            $form_state->setErrorByName($name="Age", $message= "Enter a valid age.");
        }
    }
}
