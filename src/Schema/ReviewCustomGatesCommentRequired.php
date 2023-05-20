<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ReviewCustomGatesCommentRequired
{
    public const SCHEMA_JSON         = '{"required":["environment_name","comment"],"type":"object","properties":{"environment_name":{"type":"string","description":"The name of the environment to approve or reject."},"comment":{"type":"string","description":"Comment associated with the pending deployment protection rule. **Required when state is not provided.**"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"environment_name":"generated","comment":"generated"}';

    /**
     * environmentName: The name of the environment to approve or reject.
     * comment: Comment associated with the pending deployment protection rule. **Required when state is not provided.**
     */
    public function __construct(#[MapFrom('environment_name')] public string $environmentName, public string $comment)
    {
    }
}
