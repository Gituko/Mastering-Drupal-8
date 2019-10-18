<?php

    namespace Drupal\hello_world;

    use Drupal\Core\StringTranslation\StringTranslationTrait;

    class HelloWorldController{
        /*
         * prepares the salutation
         */
        public function getSalutation(){

            $time = new \DateTime();
            if((int) $time->format('G') >= 06 && (int) $time->format('G') < 12 ){
                return $this->t('Good morning world');
            }
            if((int) $time->format('G') >= 12 && (int) $time->format('G') < 18 ){
                return $this->t('Good afternoon world');
            }
            if((int) $time->format('G') >= 18 ){
                return $this->t('Good evening world');
            }
         }
    }