<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Server;

use Rinsvent\TransformerBundle\Service\Transformer\Request\ServiceMeta;

#[\Attribute]
class Server extends ServiceMeta
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_server']
    ) {
        parent::__construct($tags);
    }
}
