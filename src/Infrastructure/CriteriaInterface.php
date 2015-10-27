<?php

namespace T4webDomainInterface\Infrastructure;

interface CriteriaInterface {

    /**
     * @return string
     */
    public function getEntityName();

    /**
     * @return string
     */
    public function getAttribute();

    /**
     * @return string
     */
    public function getPredicate();

    /**
     * @return mixed
     */
    public function getValue();

}
