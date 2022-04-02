<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Transformer\Transformer\Meta;

class UserAgentTransformer extends HeaderTransformer
{
    /**
     * @param UserAgent $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        return $this->request->headers->get('user_agent', $meta->default);
    }
}
