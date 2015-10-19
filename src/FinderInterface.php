<?php

namespace T4webDomain\ServiceInterface;


interface FinderInterface
{
    /**
     * @param DbRepository $repositoryDb
     * @param CriteriaFactory $criteriaFactory
     */
    public function __construct(DbRepository $repositoryDb, CriteriaFactory $criteriaFactory);

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
     * @return mixed
     */
    public function count(array $filter);

    /**
     * @param array $filter
     * @param int $limit
     * @param int $page
     * @return mixed
     */
    public function findByFilter(array $filter = array(), $limit = 20, $page = 1);

    /**
     * @param array $filter
     * @param array $columns
     * @return mixed
     */
    public function findManyByColumns(array $filter, array $columns);

    /**
     * @param integer $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $ids
     * @return mixed
     */
    public function getByIds(array $ids);
}