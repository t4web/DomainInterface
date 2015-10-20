<?php

namespace T4webDomainInterface;


interface InvalidInputErrorInterface {

    /**
     * @param array $errors
     */
    public function addErrors(array $errors);

    /**
     * @param string $fieldName
     * @return bool
     */
    public function hasErrors($fieldName = '');

    /**
     * @param string $fieldName
     * @return array
     */
    public function getErrors($fieldName = null);

    /**
     * @return array
     */
    public function toArray();

}