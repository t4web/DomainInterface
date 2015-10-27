<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;

interface DeleterInterface extends ErrorAwareInterface {

    /**
     * @param mixed $id
     * @return EntityInterface|null
     */
    public function delete($id);

    /**
     * @param mixed $id
     * @return EntityInterface[]|null;
     */
    public function deleteAll($id);
}
