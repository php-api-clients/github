<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DeployKey
{
    public const SCHEMA_JSON         = '{"title":"Deploy Key","required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"url":{"type":"string"},"title":{"type":"string"},"verified":{"type":"boolean"},"created_at":{"type":"string"},"read_only":{"type":"boolean"},"added_by":{"type":["string","null"]},"last_used":{"type":["string","null"]}},"description":"An SSH key granting access to a single repository."}';
    public const SCHEMA_TITLE        = 'Deploy Key';
    public const SCHEMA_DESCRIPTION  = 'An SSH key granting access to a single repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"key":"generated_key_null","url":"generated_url_null","title":"generated_title_null","verified":false,"created_at":"generated_created_at_null","read_only":false,"added_by":"generated_added_by_null","last_used":"generated_last_used_null"}';

    public function __construct(public int $id, public string $key, public string $url, public string $title, public bool $verified, #[MapFrom('created_at')] public string $createdAt, #[MapFrom('read_only')] public bool $readOnly, #[MapFrom('added_by')] public ?string $addedBy, #[MapFrom('last_used')] public ?string $lastUsed)
    {
    }
}
