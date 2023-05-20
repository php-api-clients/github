<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Content
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","path":"generated","sha":"generated","size":4,"url":"generated","html_url":"generated","git_url":"generated","download_url":"generated","type":"generated","_links":{"self":"generated","git":"generated","html":"generated"}}';

    public function __construct(public ?string $name, public ?string $path, public ?string $sha, public ?int $size, public ?string $url, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('git_url')] public ?string $gitUrl, #[MapFrom('download_url')] public ?string $downloadUrl, public ?string $type, #[MapFrom('_links')] public ?Schema\FileCommit\Content\Links $links)
    {
    }
}
