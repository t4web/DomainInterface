<?php

namespace T4webDomainInterface\Service;


interface UpdaterInterface extends ErrorAwareInterface {

    /**
     * @param mixed $id
     * @param array $data
     * @return EntityInterface|null
     */
    public function update($id, array $data);

}
