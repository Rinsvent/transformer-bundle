<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request;

use Rinsvent\Transformer\Transformer\Meta;

abstract class ServiceMeta extends Meta
{
    public const TYPE = 'service';

    public function __construct(
        public string $default,
        public array $tags = ['default']
    ) {
        parent::__construct($tags);
    }
}
