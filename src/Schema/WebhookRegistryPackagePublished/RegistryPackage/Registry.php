<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Registry
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"about_url":{"type":"string"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"aboutUrl":"generated_about_url_null","name":"generated_name_null","type":"generated_type_null","url":"generated_url_null","vendor":"generated_vendor_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('about_url')] public ?string $aboutUrl, public ?string $name, public ?string $type, public ?string $url, public ?string $vendor)
    {
    }
}
