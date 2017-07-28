<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Contents\FileOperation;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class FileOperationTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return FileOperation::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
