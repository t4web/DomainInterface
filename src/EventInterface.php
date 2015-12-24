<?php

namespace T4webDomainInterface;

interface EventInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return EntityInterface
     */
    public function getEntity();

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return mixed
     */
    public function getValidData();

    /**
     * @return mixed
     */
    public function getErrors();

    /**
     * @param array $errors
     * @return mixed
     */
    public function setErrors(array $errors);
}
