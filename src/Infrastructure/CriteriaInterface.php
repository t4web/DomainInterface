<?php

namespace T4webDomainInterface\Infrastructure;

interface CriteriaInterface {

    /**
     * @param string $table
     * @param string $attribute
     * @param mixed $value
     * @param string $predicate
     */
    public function __construct($table, $attribute, $value, $predicate);

    /**
     * @param Select $select
     *
     * @return void
     */
    public function match($select);

}
