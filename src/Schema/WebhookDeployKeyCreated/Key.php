<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDeployKeyCreated;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Key
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/rest/reference/deployments#get-a-deploy-key) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{"added_by":"generated_added_by_null","created_at":"generated_created_at_null","id":13,"key":"generated_key_null","last_used":"generated_last_used_null","read_only":false,"title":"generated_title_null","url":"https:\\/\\/example.com\\/","verified":false}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('added_by')] public ?string $addedBy, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public int $id, public string $key, #[\EventSauce\ObjectHydrator\MapFrom('last_used')] public ?string $lastUsed, #[\EventSauce\ObjectHydrator\MapFrom('read_only')] public bool $readOnly, public string $title, public string $url, public bool $verified)
    {
    }
}
