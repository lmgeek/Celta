<?php
namespace Formaldehid\Laravel\Theme\Inspinia\JsValidation;

use \Proengsoft\JsValidation\JsValidatorFactory as ProengsoftJsValidatorFactory;

class JsValidatorFactory extends ProengsoftJsValidatorFactory
{
    /**
     * @param $formRequest
     * @param null $selector
     * @return \Proengsoft\JsValidation\Javascript\JavascriptValidator
     */
    public function formRequest($formRequest, $selector = null)
    {
        return parent::formRequest($formRequest, $selector);
    }
}