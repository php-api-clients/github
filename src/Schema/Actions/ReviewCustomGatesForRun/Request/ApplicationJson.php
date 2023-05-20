<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\ReviewCustomGatesForRun\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"anyOf":[{"required":["environment_name","comment"],"type":"object","properties":{"environment_name":{"type":"string","description":"The name of the environment to approve or reject."},"comment":{"type":"string","description":"Comment associated with the pending deployment protection rule. **Required when state is not provided.**"}}},{"required":["environment_name","state"],"type":"object","properties":{"environment_name":{"type":"string","description":"The name of the environment to approve or reject."},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments."},"comment":{"type":"string","description":"Optional comment to include with the review."}}}]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
