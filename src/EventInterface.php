<?php

namespace T4webDomainInterface;

use T4webDomainInterface\EntityInterface;

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
     * @return array
     */
    public function getData();
}
