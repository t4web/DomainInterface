<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;
use T4webDomainInterface\ErrorAwareInterface;

interface DeleterInterface extends ErrorAwareInterface {

    /**
     * @param mixed $id
     * @return EntityInterface|null
     */
    public function delete($id);

    /**
     * @param array $filter
     * @return EntityInterface[]|null;
     */
    public function deleteAll(array $filter = []);
}
