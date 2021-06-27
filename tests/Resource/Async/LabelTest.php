<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Label;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class LabelTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Label::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
