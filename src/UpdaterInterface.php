<?php

namespace T4webDomain\ServiceInterface;

interface UpdaterInterface {

    /**
     * @param integer $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * @return array
     */
    public function getValues();
}
