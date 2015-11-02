<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;
use T4webDomainInterface\ErrorAwareInterface;

interface CreatorInterface extends ErrorAwareInterface
{
    /**
     * @param array $data
     * @return EntityInterface|null
     */
    public function create(array $data);
}
