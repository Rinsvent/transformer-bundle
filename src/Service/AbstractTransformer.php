<?php

namespace Rinsvent\TransformerBundle\Service;

use Rinsvent\Transformer\Transformer\TransformerInterface;

abstract class AbstractTransformer implements TransformerInterface
{
    public static function getLocatorKey()
    {
        return static::class;
    }
}
