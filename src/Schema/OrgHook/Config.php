<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\OrgHook;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"\\"http:\\/\\/example.com\\/2\\"","insecureSsl":"\\"0\\"","contentType":"\\"form\\"","secret":"\\"********\\""}';
    public function __construct(public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('insecure_ssl')] public ?string $insecureSsl, #[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?string $contentType, public ?string $secret)
    {
    }
}
