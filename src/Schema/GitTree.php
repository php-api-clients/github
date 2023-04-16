<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class GitTree
{
    public const SCHEMA_JSON = '{"title":"Git Tree","required":["sha","url","tree","truncated"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"truncated":{"type":"boolean"},"tree":{"type":"array","items":{"type":"object","properties":{"path":{"type":"string","examples":["test\\/file.rb"]},"mode":{"type":"string","examples":["040000"]},"type":{"type":"string","examples":["tree"]},"sha":{"type":"string","examples":["23f6827669e43831def8a7ad935069c8bd418261"]},"size":{"type":"integer","examples":[12]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"]}}},"description":"Objects specifying a tree structure","examples":[{"path":"file.rb","mode":"100644","type":"blob","size":30,"sha":"44b4fc6d56897b048c772eb4087f854f46256132","url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs\\/44b4fc6d56897b048c772eb4087f854f46256132","properties":{"path":{"type":"string"},"mode":{"type":"string"},"type":{"type":"string"},"size":{"type":"integer"},"sha":{"type":"string"},"url":{"type":"string"}},"required":["path","mode","type","sha","url","size"]}]}},"description":"The hierarchy between files in a Git repository."}';
    public const SCHEMA_TITLE = 'Git Tree';
    public const SCHEMA_DESCRIPTION = 'The hierarchy between files in a Git repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","truncated":false,"tree":[{"path":"file.rb","mode":"100644","type":"blob","sha":"44b4fc6d56897b048c772eb4087f854f46256132","size":30,"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs\\/44b4fc6d56897b048c772eb4087f854f46256132","properties":{"path":{"type":"string"},"mode":{"type":"string"},"type":{"type":"string"},"size":{"type":"integer"},"sha":{"type":"string"},"url":{"type":"string"}},"required":["path","mode","type","sha","url","size"]}]}';
    /**
     * tree: Objects specifying a tree structure
     * @param array<\ApiClients\Client\GitHub\Schema\GitTree\Tree> $tree
     */
    public function __construct(public string $sha, public string $url, public bool $truncated, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GitTree\Tree::class)] public array $tree)
    {
    }
}
