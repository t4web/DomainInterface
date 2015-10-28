<?php

namespace T4webDomainInterface;


interface CriteriaInterface
{
    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return void
     */
    public function equalTo($attribute, $value);

    /**
     * @param string $attribute
     * @param bool|int|float|string $value
     * @return void
     */
    public function notEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return void
     */
    public function lessThan($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return void
     */
    public function greaterThan($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return void
     */
    public function greaterThanOrEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return void
     */
    public function lessThanOrEqualTo($attribute, $value);

    /**
     * @param string $attribute
     * @param int|float $value
     * @return void
     */
    public function like($attribute, $value);

    /**
     * @param string $attribute
     * @return void
     */
    public function isNull($attribute);

    /**
     * @param string $attribute
     * @return void
     */
    public function isNotNull($attribute);

    /**
     * @param string $attribute
     * @param array $values
     * @return void
     */
    public function in($attribute, array $values);

    /**
     * @param string $attribute
     * @param int|float|string $minValue
     * @param int|float|string $maxValue
     * @return void
     */
    public function between($attribute, $minValue, $maxValue);

    /**
     * @param string $attribute
     * @return void
     */
    public function order($attribute);

    /**
     * @param int $limit
     * @return void
     */
    public function limit($limit);

    /**
     * @param int $offset
     * @return void
     */
    public function offset($offset);

    /**
     * @param string $entityName
     * @return void
     */
    public function relation($entityName);

    /**
     * @return array
     */
    public function toArray();

}