<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Server;

use Rinsvent\Transformer\Transformer\Meta;

class IpTransformer extends ServerTransformer
{
    /**
     * @param Ip $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        return $this->request->getClientIp();
    }
}
