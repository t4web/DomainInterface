<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;
use T4webDomainInterface\ErrorAwareInterface;

interface UpdaterInterface extends ErrorAwareInterface {

    /**
     * @param mixed $id
     * @param array $data
     * @return EntityInterface|null
     */
    public function update($id, array $data);

}
