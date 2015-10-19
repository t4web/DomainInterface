<?php

namespace T4webDomain\ServiceInterface;

interface UpdaterInterface {

    /**
     * @param mixed $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

}
