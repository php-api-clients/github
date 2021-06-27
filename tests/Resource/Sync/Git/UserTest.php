<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Git\User;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
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
        return ApiSettings::NAMESPACE;
    }
}
