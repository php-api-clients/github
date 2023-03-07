<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GitTree;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string","examples":["test\\/file.rb"]},"mode":{"type":"string","examples":["040000"]},"type":{"type":"string","examples":["tree"]},"sha":{"type":"string","examples":["23f6827669e43831def8a7ad935069c8bd418261"]},"size":{"type":"integer","examples":[12]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"test\\/file.rb","mode":"040000","type":"tree","sha":"23f6827669e43831def8a7ad935069c8bd418261","size":12,"url":"https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"}';
    public function __construct(public ?string $path, public ?string $mode, public ?string $type, public ?string $sha, public ?int $size, public ?string $url)
    {
    }
}
