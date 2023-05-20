<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredStatusChecks
{
    public const SCHEMA_JSON         = '{"title":"required_status_checks","required":["type"],"type":"object","properties":{"type":{"enum":["required_status_checks"],"type":"string"},"parameters":{"required":["required_status_checks","strict_required_status_checks_policy"],"type":"object","properties":{"required_status_checks":{"type":"array","items":{"title":"StatusCheckConfiguration","required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The status check context name that must be present on the commit."},"integration_id":{"type":"integer","description":"The optional integration ID that this status check must originate from."}},"description":"Required status check"},"description":"Status checks that are required."},"strict_required_status_checks_policy":{"type":"boolean","description":"Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."}}}},"description":"Parameters to be used for the required_status_checks rule"}';
    public const SCHEMA_TITLE        = 'required_status_checks';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the required_status_checks rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"required_status_checks","parameters":{"required_status_checks":[{"context":"generated","integration_id":14},{"context":"generated","integration_id":14}],"strict_required_status_checks_policy":false}}';

    public function __construct(public string $type, public ?Schema\RepositoryRuleRequiredStatusChecks\Parameters $parameters)
    {
    }
}
