<?php

namespace T4webDomainInterface\Infrastructure;

interface CriteriaInterface {

    /**
     * @param QueryBuilderInterface $queryBuilder
     * @return void
     */
    public function build(QueryBuilderInterface $queryBuilder);
    
}
