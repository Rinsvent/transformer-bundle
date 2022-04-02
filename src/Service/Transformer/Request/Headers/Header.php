<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Headers;

use Rinsvent\TransformerBundle\Service\Transformer\Request\ServiceMeta;

#[\Attribute]
class Header extends ServiceMeta
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_headers']
    ) {
        parent::__construct($tags);
    }
}
