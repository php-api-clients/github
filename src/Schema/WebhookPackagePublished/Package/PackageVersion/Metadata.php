<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Metadata
{
    public const SCHEMA_JSON = '{"type":"object","additionalProperties":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
