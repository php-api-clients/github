<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMetaDeleted\Hook;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"required":["content_type","insecure_ssl","url"],"type":"object","properties":{"content_type":{"enum":["json","form"],"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":"json","insecure_ssl":"generated_insecure_ssl_null","secret":"generated_secret_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public string $contentType, #[\EventSauce\ObjectHydrator\MapFrom('insecure_ssl')] public string $insecureSsl, public ?string $secret, public string $url)
    {
    }
}
