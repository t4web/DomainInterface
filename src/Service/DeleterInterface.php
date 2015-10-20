<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;

interface DeleterInterface extends ErrorAwareInterface {

    /**
     * @param mixed $id
     * @param string $attribyteName
     * @return EntityInterface|null
     */
    public function delete($id, $attribyteName = 'Id');

    /**
     * @param mixed $id
     * @param string $attribyteName
     * @return array of EntityInterface;
     */
    public function deleteAll($id, $attribyteName = 'Id');
}
