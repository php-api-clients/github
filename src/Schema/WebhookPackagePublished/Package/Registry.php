<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Registry
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"generated_about_url","name":"generated_name","type":"generated_type","url":"generated_url","vendor":"generated_vendor"}';
    public function __construct(public ?string $about_url, public ?string $name, public ?string $type, public ?string $url, public ?string $vendor)
    {
    }
}
