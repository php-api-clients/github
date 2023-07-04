<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ReviewCustomGatesStateRequired
{
    public const SCHEMA_JSON         = '{"required":["environment_name","state"],"type":"object","properties":{"environment_name":{"type":"string","description":"The name of the environment to approve or reject."},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments."},"comment":{"type":"string","description":"Optional comment to include with the review."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"environment_name":"generated","state":"approved","comment":"generated"}';

    /**
     * environmentName: The name of the environment to approve or reject.
     * state: Whether to approve or reject deployment to the specified environments.
     * comment: Optional comment to include with the review.
     */
    public function __construct(#[MapFrom('environment_name')]
    public string $environmentName, public string $state, public string|null $comment,)
    {
    }
}
