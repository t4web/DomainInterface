<?php

namespace T4webDomainInterface\Service;

use T4webDomainInterface\EntityInterface;

interface FinderInterface
{
    /**
     * @param array $filter
     * @return EntityInterface|null
     */
    public function find(array $filter);

    /**
     * @param array $filter
     * @return EntityInterface[]
     */
    public function findMany(array $filter = array());

    /**
     * @param array $filter
     * @return int
     */
    public function count(array $filter);

    /**
     * @param mixed $id
     * @return EntityInterface|null
     */
    public function getById($id);

    /**
     * @param array $ids
     * @return EntityInterface[]
     */
    public function getByIds(array $ids);
}