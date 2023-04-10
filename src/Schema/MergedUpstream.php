<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class MergedUpstream
{
    public const SCHEMA_JSON = '{"title":"Merged upstream","type":"object","properties":{"message":{"type":"string"},"merge_type":{"enum":["merge","fast-forward","none"],"type":"string"},"base_branch":{"type":"string"}},"description":"Results of a successful merge upstream request"}';
    public const SCHEMA_TITLE = 'Merged upstream';
    public const SCHEMA_DESCRIPTION = 'Results of a successful merge upstream request';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","merge_type":"merge","base_branch":"generated_base_branch_null"}';
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('merge_type')] public ?string $mergeType, #[\EventSauce\ObjectHydrator\MapFrom('base_branch')] public ?string $baseBranch)
    {
    }
}