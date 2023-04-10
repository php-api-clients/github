<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class StatusCheckPolicy
{
    public const SCHEMA_JSON = '{"title":"Status Check Policy","required":["url","contexts_url","strict","contexts","checks"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"]},"strict":{"type":"boolean","examples":[true]},"contexts":{"type":"array","items":{"type":"string"},"examples":["continuous-integration\\/travis-ci"]},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"]}},"description":"Status Check Policy"}';
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks","strict":true,"contexts":["continuous-integration\\/travis-ci"],"checks":[{"context":"continuous-integration\\/travis-ci","app_id":13}],"contexts_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"}';
    /**
     * @param array<string> $contexts
     * @param array<\ApiClients\Client\Github\Schema\StatusCheckPolicy\Checks> $checks
     */
    public function __construct(public string $url, public bool $strict, public array $contexts, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\StatusCheckPolicy\Checks::class)] public array $checks, #[\EventSauce\ObjectHydrator\MapFrom('contexts_url')] public string $contextsUrl)
    {
    }
}
