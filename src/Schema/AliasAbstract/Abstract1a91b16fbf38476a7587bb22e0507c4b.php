<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract1a91b16fbf38476a7587bb22e0507c4b
{
    public const SCHEMA_JSON = '{"required":["total_count","artifacts"],"type":"object","properties":{"total_count":{"type":"integer"},"artifacts":{"type":"array","items":{"title":"Artifact","required":["id","node_id","name","size_in_bytes","url","archive_download_url","expired","created_at","expires_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDEwOkNoZWNrU3VpdGU1"]},"name":{"type":"string","description":"The name of the artifact.","examples":["AdventureWorks.Framework"]},"size_in_bytes":{"type":"integer","description":"The size in bytes of the artifact.","examples":[12345]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5"]},"archive_download_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip"]},"expired":{"type":"boolean","description":"Whether or not the artifact has expired."},"created_at":{"type":["string","null"],"format":"date-time"},"expires_at":{"type":["string","null"],"format":"date-time"},"updated_at":{"type":["string","null"],"format":"date-time"},"workflow_run":{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}},"description":"An artifact"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"artifacts":[{"id":5,"node_id":"MDEwOkNoZWNrU3VpdGU1","name":"AdventureWorks.Framework","size_in_bytes":12345,"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5","archive_download_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip","expired":false,"created_at":"1970-01-01T00:00:00+00:00","expires_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","workflow_run":{"id":10,"repository_id":42,"head_repository_id":42,"head_branch":"main","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"}}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\Artifact> $artifacts
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Artifact::class)] public array $artifacts)
    {
    }
}
