<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Tree;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class TreeTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Tree::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
