<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request\Headers;

use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\TransformerBundle\Service\Transformer\Request\AbstractRequest;

class HeaderTransformer extends AbstractRequest
{
    /**
     * @param Header $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        return $this->request->headers->get($meta->property, $meta->default);
    }
}
