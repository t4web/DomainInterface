<?php

namespace T4webDomain\ServiceInterface;

interface DeleterInterface {

    /**
     * @param mixed $id
     * @param string $attribyteName
     * @return mixed
     */
    public function delete($id, $attribyteName = 'Id');

    /**
     * @param mixed $id
     * @param string $attribyteName
     * @return mixed
     */
    public function deleteAll($id, $attribyteName = 'Id');
}
