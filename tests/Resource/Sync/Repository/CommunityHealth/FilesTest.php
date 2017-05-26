<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\CommunityHealth;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\CommunityHealth\Files;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class FilesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Files::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
