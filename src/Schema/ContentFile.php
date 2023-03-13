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
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","encoding":"generated_encoding","size":13,"name":"generated_name","path":"generated_path","content":"generated_content","sha":"generated_sha","url":"generated_url","git_url":"generated_git_url","html_url":"generated_html_url","download_url":"generated_download_url","_links":{"git":"generated_git","html":"generated_html","self":"generated_self"},"target":"\\"actual\\/actual.md\\"","submodule_git_url":"\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""}';
    public function __construct(public string $type, public string $encoding, public int $size, public string $name, public string $path, public string $content, public string $sha, public string $url, public ?string $git_url, public ?string $html_url, public ?string $download_url, public Schema\ContentTree\Entries\Links $_links, public ?string $target, public ?string $submodule_git_url)
    {
    }
}
