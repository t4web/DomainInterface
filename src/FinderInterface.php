<?php

namespace T4webDomain\ServiceInterface;


interface FinderInterface
{
    /**
     * @param array $filter
     * @return mixed
     */
    public function find(array $filter);

    /**
     * @param array $filter
     * @return mixed
     */
    public function findMany(array $filter = array());

    /**
     * @param array $filter
     * @return int
     */
    public function count(array $filter);

    /**
     * @param mixed $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $ids
     * @return mixed
     */
    public function getByIds(array $ids);
}