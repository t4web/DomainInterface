<?php

namespace T4webDomainInterface\Infrastructure;

interface CriteriaFactoryInterface {

    /**
     * @param array $filter
     * @return CriteriaInterface[]
     */
    public function build(array $filter = []);
}
