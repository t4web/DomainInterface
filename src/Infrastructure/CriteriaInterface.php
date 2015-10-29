<?php

namespace T4webDomainInterface\Infrastructure;


interface CriteriaInterface
{
    /**
     * @return string
     */
    public function getEntityName();

    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return $this
     */
    public function equalTo($attribute, $value);

    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return $this
     */
    public function notEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function lessThan($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function greaterThan($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function greaterThanOrEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function lessThanOrEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return $this
     */
    public function like($attribute, $value);

    /**
     * @param string $attribute
     * @return $this
     */
    public function isNull($attribute);

    /**
     * @param string $attribute
     * @return $this
     */
    public function isNotNull($attribute);

    /**
     * @param string $attribute
     * @param array $values
     * @return $this
     */
    public function in($attribute, array $values);

    /**
     * @param string $attribute
     * @param int|float|string $minValue
     * @param int|float|string $maxValue
     * @return $this
     */
    public function between($attribute, $minValue, $maxValue);

    /**
     * @param string $attribute
     * @return $this
     */
    public function order($attribute);

    /**
     * @param int $limit
     * @return $this
     */
    public function limit($limit);

    /**
     * @param int $offset
     * @return $this
     */
    public function offset($offset);

    /**
     * @param string $entityName
     * @return CriteriaInterface
     */
    public function relation($entityName);

    /**
     * @param string $entityName
     * @return CriteriaInterface
     */
    public function orCriteria($entityName = null);

    /**
     * @return CriteriaInterface[]
     */
    public function getRelations();

    /**
     * @return array
     */
    public function getPredicate();

    /**
     * @return CriteriaInterface[]
     */
    public function getOr();

    /**
     * @return int
     */
    public function getLimit();

    /**
     * @return int
     */
    public function getOffset();

    /**
     * @return array
     */
    public function getOrder();

}