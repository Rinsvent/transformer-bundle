<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Server;

use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\TransformerBundle\Service\Transformer\Request\AbstractRequest;

class ServerTransformer extends AbstractRequest
{
    /**
     * @param Server $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        return $this->request->server->get($meta->property, $meta->default);
    }
}
