<?php

namespace T4webDomainInterface\Infrastructure;

use T4webDomainInterface\EntityInterface;

interface RepositoryInterface {

    /**
     * @param EntityInterface $entity
     * @return EntityInterface
     */
    public function add(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     * @return void
     */
    public function delete(EntityInterface $entity);

    /**
     * @param CriteriaInterface $criteria
     * @return EntityInterface
     */
    public function find(CriteriaInterface $criteria);

    /**
     * @param CriteriaInterface $criteria
     * @return array of EntityInterface
     */
    public function findMany(CriteriaInterface $criteria);

    /**
     * @param CriteriaInterface $criteria
     * @return int
     */
    public function count(CriteriaInterface $criteria);
}
