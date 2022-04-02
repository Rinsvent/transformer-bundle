<?php

namespace Rinsvent\TransformerBundle\Service;

use Rinsvent\Transformer\Resolver\TransformerResolverInterface;
use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\Transformer\Transformer\TransformerInterface;
use Symfony\Component\DependencyInjection\ServiceLocator;

class ServiceResolver implements TransformerResolverInterface
{
    public const TYPE = 'service';

    public function __construct(
        private ServiceLocator $transformerLocator
    ) {
    }

    public function resolve(Meta $meta): TransformerInterface
    {
        $transformerClass = $meta::class . 'Transformer';
        return $this->transformerLocator->get($transformerClass);
    }
}
