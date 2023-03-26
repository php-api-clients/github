<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ContentFile
{
    public const SCHEMA_JSON = '{"title":"Content File","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"enum":["file"],"type":"string"},"encoding":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"target":{"type":"string","examples":["\\"actual\\/actual.md\\""]},"submodule_git_url":{"type":"string","examples":["\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""]}},"description":"Content File"}';
    public const SCHEMA_TITLE = 'Content File';
    public const SCHEMA_DESCRIPTION = 'Content File';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"file","encoding":"generated_encoding_null","size":13,"name":"generated_name_null","path":"generated_path_null","content":"generated_content_null","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/","git_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","download_url":"https:\\/\\/example.com\\/","_links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"},"target":"\\"actual\\/actual.md\\"","submodule_git_url":"\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""}';
    public function __construct(public string $type, public string $encoding, public int $size, public string $name, public string $path, public string $content, public string $sha, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public ?string $downloadUrl, #[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\ContentTree\Entries\Links $links, public ?string $target, #[\EventSauce\ObjectHydrator\MapFrom('submodule_git_url')] public ?string $submoduleGitUrl)
    {
    }
}
