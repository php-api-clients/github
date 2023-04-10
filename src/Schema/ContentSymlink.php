<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ContentSymlink
{
    public const SCHEMA_JSON = '{"title":"Symlink Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","target"],"type":"object","properties":{"type":{"enum":["symlink"],"type":"string"},"target":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"An object describing a symlink"}';
    public const SCHEMA_TITLE = 'Symlink Content';
    public const SCHEMA_DESCRIPTION = 'An object describing a symlink';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"symlink","target":"generated_target_null","size":13,"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","git_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","download_url":"https:\\/\\/example.com\\/","_links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"}}';
    public function __construct(public string $type, public string $target, public int $size, public string $name, public string $path, public string $sha, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\ContentSymlink\Links $links)
    {
    }
}
