<?php

namespace T4webDomainInterface;


interface ErrorAwareInterface
{
    /**
     * @param array $errors
     */
    public function setErrors(array $errors);

    /**
     * @return array
     */
    public function getErrors();

    /**
     * @return bool
     */
    public function hasErrors();
}