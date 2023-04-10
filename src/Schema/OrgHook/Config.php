<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\OrgHook;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"\\"http:\\/\\/example.com\\/2\\"","insecure_ssl":"\\"0\\"","content_type":"\\"form\\"","secret":"\\"********\\""}';
    public function __construct(public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('insecure_ssl')] public ?string $insecureSsl, #[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?string $contentType, public ?string $secret)
    {
    }
}
