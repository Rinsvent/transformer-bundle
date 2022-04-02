<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Headers;

use Rinsvent\TransformerBundle\Service\Transformer\Request\ServiceMeta;

#[\Attribute]
class UserAgent extends ServiceMeta
{
    public function __construct(
        public ?string $default = null,
        public array $tags = ['default']
    ) {
        parent::__construct($tags);
    }
}
