<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class PullRequestMergeResult
{
    public const SCHEMA_JSON = '{"title":"Pull Request Merge Result","required":["merged","message","sha"],"type":"object","properties":{"sha":{"type":"string"},"merged":{"type":"boolean"},"message":{"type":"string"}},"description":"Pull Request Merge Result"}';
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","merged":false,"message":"generated_message_null"}';
    public function __construct(public string $sha, public bool $merged, public string $message)
    {
    }
}
