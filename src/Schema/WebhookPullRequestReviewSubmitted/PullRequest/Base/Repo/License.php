<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewSubmitted\PullRequest\Base\Repo;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class License
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key_null","name":"generated_name_null","node_id":"generated_node_id_null","spdx_id":"generated_spdx_id_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $key, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('spdx_id')] public string $spdxId, public ?string $url)
    {
    }
}
