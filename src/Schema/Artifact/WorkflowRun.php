<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Artifact;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class WorkflowRun
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":10,"repository_id":42,"head_repository_id":42,"head_branch":"main","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"}';
    public function __construct(public ?int $id, public ?int $repository_id, public ?int $head_repository_id, public ?string $head_branch, public ?string $head_sha)
    {
    }
}
