<?php

namespace T4webDomainInterface;

interface EventManagerInterface
{
    public function trigger(EventInterface $event);

    public function attach($event, $listener = null);
}
