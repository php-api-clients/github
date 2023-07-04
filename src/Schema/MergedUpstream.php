<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MergedUpstream
{
    public const SCHEMA_JSON         = '{"title":"Merged upstream","type":"object","properties":{"message":{"type":"string"},"merge_type":{"enum":["merge","fast-forward","none"],"type":"string"},"base_branch":{"type":"string"}},"description":"Results of a successful merge upstream request"}';
    public const SCHEMA_TITLE        = 'Merged upstream';
    public const SCHEMA_DESCRIPTION  = 'Results of a successful merge upstream request';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","merge_type":"none","base_branch":"generated"}';

    public function __construct(public string|null $message, #[MapFrom('merge_type')]
    public string|null $mergeType, #[MapFrom('base_branch')]
    public string|null $baseBranch,)
    {
    }
}
