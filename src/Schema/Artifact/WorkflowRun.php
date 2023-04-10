<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Artifact;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class WorkflowRun
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":10,"repository_id":42,"head_repository_id":42,"head_branch":"main","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"}';
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public ?int $repositoryId, #[\EventSauce\ObjectHydrator\MapFrom('head_repository_id')] public ?int $headRepositoryId, #[\EventSauce\ObjectHydrator\MapFrom('head_branch')] public ?string $headBranch, #[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public ?string $headSha)
    {
    }
}
