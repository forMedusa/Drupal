<?php

namespace Drupal\first_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Formbase;
use Drupal\devel\Plugin\Devel\Dumper\Kint;

/**
 * Provides a Hello World Block.
 *
 * @Block(
 *   id = "my_first_block",
 *   admin_label = @Translation("Hello World"),
 *   category = "custom"
 * )
 */
class HelloWorld extends BlockBase
{
    /**
     * 
     */
    public function build()
    {
        $currentUser = \Drupal::currentUser()->getDisplayName();
        // $markup= "Hello " . $currentUser;
        //     return [
        //         '#type' => 'markup',
        //         '#markup' => $markup,
        //     ];
        // }
        // public function showContent()
        // {
        $form = \Drupal::formBuilder()->getForm('Drupal\first_module\Form\dbForm');
        $renderForm = \Drupal::service('renderer')->render($form);
        $query = \Drupal::database();
        $result = $query->select('dev', 'e')
            ->fields('e', ['uid', 'name', 'age'])
            // ->extend(‘\Drupal\Core\Database\Query\PagerSelectExtender’)
            ->execute()->fetchAll(\PDO::FETCH_OBJ);
        //Kint($result);
        $data = [];
        $rows = \Drupal::request()->query->get('Rows');   // to get from url
        $searching = \Drupal::request()->query->get('search');   // to get from url
        //Kint($searching); Kint($rows);
        // foreach ($result as $row) {
        //     //     Kint($row);
        //     $data[] = [
        //         'uid' => $row->uid,
        //         'name' => $row->name,
        //         'age' => $row->age
        //     ];
        // }
        if($rows != 0)
        {
        $i = 0;
        foreach ($result as $row)
        {
            if($i==$rows)
            {
                break;
            }
            $data[] = [
                'uid' => $row->uid,
                'name' => $row->name,
                'age' => $row->age
            ];
            $i++;
        }
        }
        elseif($searching != '')
        {
        foreach ($result as $row)
        {
            if($searching==$row->name)
            { 
                //Kint($searching);
                $data[] = [
                    'uid' => $row->uid,
                    'name' => $row->name,
                    'age' => $row->age
                ];
            }
        }
    }
    else{
        foreach($result as $row){
            $data[] = [
                'uid' => $row->uid,
                'name' => $row->name,
                'age' => $row->age
            ];
        }
    }
        $header = array('uid', 'Name', 'Age');
        // $build['table'] = [
        //     #type’=>‘table’,
        //     #header’=>$header,
        //     #rows’=>$data
        // ];
        $build['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $data
        ];
        return [
            $build,
            '#title' => 'This is table title',
            '#markup' => $renderForm
        ];
        // return [
        //     $build,
        //     #title’ => ‘developer list’
        // ];
    }
}
