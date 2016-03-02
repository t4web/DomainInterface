<?php

namespace T4webDomainInterface;

interface ServiceInterface {

    /**
     * @param mixed $criteria
     * @param mixed $changes
     * @return mixed
     */
    public function handle($criteria, $changes);

}
