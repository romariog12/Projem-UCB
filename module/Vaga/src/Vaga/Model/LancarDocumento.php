<?php


namespace Vaga\Model;

use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;
/**
 * @author Romário Macedo Portela <romariomacedo18@gmail.com>
 */
class LancarDocumento implements InputFilterAwareInterface{
   
    public $inicioEnc;
    public $editarFim;
    public $editarDocumento;
    protected $inputFilter; 
    public function exchangeArray($data){
         $this->inicioEnc = (isset($data['inicioEnc'])) ? $data['inicioEnc'] : null;
         $this->fimEnc  = (isset($data['fimEnc']))  ? $data['fimEnc']  : null;
         $this->documento  = (isset($data['documento']))  ? $data['documento']  : null;
     }
     
    public function getInputFilter() {
        if (!$this->inputFilter) {
             $inputFilter = new InputFilter();
             $inputFilter->add(array(
                 'name'     => 'inicioEnc',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'fimEnc',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'documento',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $this->inputFilter = $inputFilter;
         }

         return $this->inputFilter;
     
    }

    public function setInputFilter(InputFilterInterface $inputFilter) {
         throw new \Exception("Not used");
    }
}
