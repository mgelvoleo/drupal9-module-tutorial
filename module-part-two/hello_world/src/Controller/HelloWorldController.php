<?php
namespace Drupal\hello_world\Controller;

use Drupal\hello_world\HelloWorldSalutation;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HelloWorldController extends ControllerBase {

    /**
     * The salutation services
     *
     * @var \Drupal\hello_world\HelloWorldSalutation
     */
    protected $salutation;


    /**
     * HelloWorldController constructor
     * @param \Drupal\hello_world\HelloWorldSalutation
     */
    public function __construct(HelloWorldSalutation $salutation ){
        $this->salutation = $salutation;
    }

    /**
     * {@inheritDoc}
     */
    public static function create(ContainerInterface $container){
        return new static($container->get('hello_world.salutation'));
    }




    public function helloWorld(){
        return [
            '#markup' => $this->salutation->getSalutation(),
        ];
    }
}


