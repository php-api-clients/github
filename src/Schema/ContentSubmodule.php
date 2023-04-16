<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ContentSubmodule
{
    public const SCHEMA_JSON         = '{"title":"Submodule Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","submodule_git_url"],"type":"object","properties":{"type":{"enum":["submodule"],"type":"string"},"submodule_git_url":{"type":"string","format":"uri"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"An object describing a submodule"}';
    public const SCHEMA_TITLE        = 'Submodule Content';
    public const SCHEMA_DESCRIPTION  = 'An object describing a submodule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"submodule","submodule_git_url":"https:\\/\\/example.com\\/","size":13,"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","git_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","download_url":"https:\\/\\/example.com\\/","_links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"}}';

    public function __construct(public string $type, #[MapFrom('submodule_git_url')] public string $submoduleGitUrl, public int $size, public string $name, public string $path, public string $sha, public string $url, #[MapFrom('git_url')] public ?string $gitUrl, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('download_url')] public ?string $downloadUrl, #[MapFrom('_links')] public Schema\ContentSubmodule\Links $links)
    {
    }
}
