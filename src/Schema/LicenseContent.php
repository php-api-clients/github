<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class LicenseContent
{
    public const SCHEMA_JSON = '{"title":"License Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding","license"],"type":"object","properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string","format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"type":{"type":"string"},"content":{"type":"string"},"encoding":{"type":"string"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]}},"description":"License Content"}';
    public const SCHEMA_TITLE = 'License Content';
    public const SCHEMA_DESCRIPTION = 'License Content';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","path":"generated_path","sha":"generated_sha","size":13,"url":"generated_url","html_url":"generated_html_url","git_url":"generated_git_url","download_url":"generated_download_url","type":"generated_type","content":"generated_content","encoding":"generated_encoding","_links":{"git":"generated_git","html":"generated_html","self":"generated_self"},"license":{"key":"mit","name":"MIT License","url":"https:\\/\\/api.github.com\\/licenses\\/mit","spdx_id":"MIT","node_id":"MDc6TGljZW5zZW1pdA==","html_url":"generated_html_url"}}';
    public function __construct(public ?string $name, public ?string $path, public ?string $sha, public ?int $size, public ?string $url, public ?string $html_url, public ?string $git_url, public ?string $download_url, public ?string $type, public ?string $content, public ?string $encoding, public ?Schema\ContentTree\Entries\Links $_links, public ?Schema\LicenseSimple $license)
    {
    }
}
