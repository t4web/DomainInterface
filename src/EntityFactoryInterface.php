<?php

namespace T4webDomainInterface;

interface EntityFactoryInterface {

    /**
     * @param array $data
     * @return EntityInterface
     */
    public function create(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function createCollection(array $data);
    
}
