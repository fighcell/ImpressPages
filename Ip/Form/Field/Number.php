<?php
/**
 * @package ImpressPages
 *
 */

namespace Ip\Form\Field;


use Ip\Form\Field;

class Number extends Field{

    public function render($doctype) {
        return '<input '.$this->getAttributesStr($doctype).' class="form-control '.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'" '.$this->getValidationAttributesStr($doctype).' type="number" value="'.htmlspecialchars($this->getValue()).'" />';
    }

    /**
     * CSS class that should be applied to surrounding element of this field. Extending classes should specify their value.
     */
    public function getTypeClass() {
        return 'number';
    }

}