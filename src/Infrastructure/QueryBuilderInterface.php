<?php

namespace T4webDomainInterface\Infrastructure;

interface QueryBuilderInterface {
    
    /**
     * @return \T4webBase\Db\Select
     */
    public function getQuery();
    
    /**
     * @return QueryBuilderInterface
     */
    public function from($tableName);
    
    /**
     * @return QueryBuilderInterface
     */
    public function join($joinTableName, $joinRule);
    
    /**
     * @return QueryBuilderInterface
     */
    public function leftJoin($joinTableName, $joinRule);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addFilterEqual($name, $value);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addFilterIn($name, $value);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addFilterMoreOrEqual($name, $value);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addFilterLessOrEqual($name, $value);

    /**
     * @return QueryBuilderInterface
     */
    public function addFilterLike($name, $value);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addOrFilterLike($name, $value);

    /**
     * @return QueryBuilderInterface
     */
    public function addFilterIsNull($name);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addFilterIsNotNull($name);
    
    /**
     * @return QueryBuilderInterface
     */
    public function addColumn($columnName, $alias = '');
    
    public function offset($offset);
    
    public function limit($limit);
    
    public function page($page);
    
    public function order($order);

    public function group($group);

}
