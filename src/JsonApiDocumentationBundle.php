<?php

namespace Mpaden\JsonApi;

use Mpaden\JsonApi\DependencyInjection\JsonApiDocumentationExtension;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Hamid Paknahad <hp.paknahad@gmail.com>
 */
class JsonApiDocumentationBundle extends Bundle
{
    public function getContainerExtension(): Extension
    {
        return new JsonApiDocumentationExtension();
    }
}
