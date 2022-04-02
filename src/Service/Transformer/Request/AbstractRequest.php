<?php

namespace Rinsvent\TransformerBundle\Service\Transformer\Request;

use Rinsvent\TransformerBundle\Service\AbstractTransformer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class AbstractRequest extends AbstractTransformer
{
    /** @var Request */
    protected $request;

    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
}
