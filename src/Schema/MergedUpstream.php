<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MergedUpstream
{
    public const SCHEMA_JSON = '{"title":"Merged upstream","type":"object","properties":{"message":{"type":"string"},"merge_type":{"enum":["merge","fast-forward","none"],"type":"string"},"base_branch":{"type":"string"}},"description":"Results of a successful merge upstream request"}';
    public const SCHEMA_TITLE = 'Merged upstream';
    public const SCHEMA_DESCRIPTION = 'Results of a successful merge upstream request';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","merge_type":"generated_merge_type","base_branch":"generated_base_branch"}';
    public function __construct(public ?string $message, public ?string $merge_type, public ?string $base_branch)
    {
    }
}
