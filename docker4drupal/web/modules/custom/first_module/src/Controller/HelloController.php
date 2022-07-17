<?php
namespace Drupal\first_module\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * 
 */
class HelloController extends ControllerBase{
    /**
     * 
     */
    public function say() {
        //$id= \Drupal::currentUser()->getEmail();
        //ksm(\Drupal::currentUser());
        return [ 
            "#type" => "markup",
            "#markup" => "This is a text",
        ];
    }
}