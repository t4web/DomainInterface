<?php

namespace T4webDomainInterface\Infrastructure;

use T4webDomainInterface\EntityInterface;

interface RepositoryInterface
{
    /**
     * @param EntityInterface $entity
     * @return EntityInterface
     */
    public function add(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     * @return void
     */
    public function remove(EntityInterface $entity);

    /**
     * @param mixed $criteria
     * @return EntityInterface|null
     */
    public function find($criteria);

    /**
     * @param mixed $criteria
     * @return EntityInterface[]
     */
    public function findMany($criteria);

    /**
     * @param mixed $criteria
     * @return int
     */
    public function count($criteria);

    /**
     * @param array $filter
     * @return CriteriaInterface
     */
    public function createCriteria(array $filter = []);
}
