<?php

namespace T4webDomainInterface;

interface EventManagerInterface
{
    /**
     * @param EventInterface $event
     * @return mixed
     */
    public function trigger(EventInterface $event);

    /**
     * @param mixed $event
     * @param null $listener
     * @return mixed
     */
    public function attach($event, $listener = null);

    /**
     * @param mixed $event
     * @param EntityInterface|null $entity
     * @param array $data
     * @return EventInterface
     */
    public function createEvent($event, EntityInterface $entity = null, array $data = []);
}
