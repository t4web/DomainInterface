<?php

namespace T4webDomainInterface;


interface ErrorAwareInterface {

    /**
     * @param array $errors
     */
    public function setErrors(array $errors);

    /**
     * @return InvalidInputErrorInterface
     */
    public function getErrors();

    /**
     * @return bool
     */
    public function hasErrors();

}