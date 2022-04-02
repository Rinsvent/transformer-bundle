<?php

namespace Rinsvent\TransformerBundle\EventListener;

use Rinsvent\Transformer\Resolver\TransformerResolverStorage;
use Rinsvent\TransformerBundle\Service\ServiceResolver;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestListener
{
    public function __construct(
        private ServiceResolver $serviceResolver
    ) {}

    public function onKernelRequest(RequestEvent $event)
    {
        $storage = TransformerResolverStorage::getInstance();
        $storage->add(ServiceResolver::TYPE, $this->serviceResolver);
    }
}
