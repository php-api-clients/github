<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Content
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","size":13,"url":"generated_url_null","html_url":"generated_html_url_null","git_url":"generated_git_url_null","download_url":"generated_download_url_null","type":"generated_type_null","_links":{"self":"generated_self_null","git":"generated_git_null","html":"generated_html_null"}}';
    public function __construct(public ?string $name, public ?string $path, public ?string $sha, public ?int $size, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, public ?string $type, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public ?Schema\FileCommit\Content\Links $links)
    {
    }
}
