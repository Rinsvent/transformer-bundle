<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Server;

use Rinsvent\Transformer\Transformer\Meta;

#[\Attribute]
class Server extends Meta
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_server']
    ) {
        parent::__construct($tags);
    }
}
