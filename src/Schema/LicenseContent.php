<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class LicenseContent
{
    public const SCHEMA_JSON         = '{"title":"License Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding","license"],"type":"object","properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string","format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"type":{"type":"string"},"content":{"type":"string"},"encoding":{"type":"string"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]}},"description":"License Content"}';
    public const SCHEMA_TITLE        = 'License Content';
    public const SCHEMA_DESCRIPTION  = 'License Content';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","size":13,"url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","git_url":"https:\\/\\/example.com\\/","download_url":"https:\\/\\/example.com\\/","type":"generated_type_null","content":"generated_content_null","encoding":"generated_encoding_null","_links":{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"},"license":{"key":"mit","name":"MIT License","url":"https:\\/\\/api.github.com\\/licenses\\/mit","spdx_id":"MIT","node_id":"MDc6TGljZW5zZW1pdA==","html_url":"https:\\/\\/example.com\\/"}}';

    public function __construct(public string $name, public string $path, public string $sha, public int $size, public string $url, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('git_url')] public ?string $gitUrl, #[MapFrom('download_url')] public ?string $downloadUrl, public string $type, public string $content, public string $encoding, #[MapFrom('_links')] public Schema\LicenseContent\Links $links, public ?Schema\LicenseSimple $license)
    {
    }
}
