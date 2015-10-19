<?php

namespace T4webDomainInterface\Service;


interface UpdaterInterface {

    /**
     * @param mixed $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

}
