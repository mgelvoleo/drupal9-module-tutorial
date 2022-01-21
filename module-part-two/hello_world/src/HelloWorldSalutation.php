<?php
namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

class HelloWorldSalutation {

    use StringTranslationTrait;

    public function getSalutation(){
        $time = new \DateTime();
        if((int)$time->format('G') > 00 && (int)$time->format('g') < 12){
            return $this->t('Good Morning');
        }
        if((int)$time->format('G') >= 12 && (int)$time->format('g') < 12){
            return $this->t('Good Afternong');
        }
        if((int)$time->format('G') >= 18 ){
            return $this->t('Good Eventing');
        }
    }
}