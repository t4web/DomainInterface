<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;

interface CreatorInterface extends ErrorAwareInterface {

    /**
     * @param array $data
     * @return EntityInterface|null
     */
    public function create(array $data);

}
