<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\User;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class UserTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return User::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
