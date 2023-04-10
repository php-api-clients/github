<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RateLimitOverview
{
    public const SCHEMA_JSON = '{"title":"Rate Limit Overview","required":["rate","resources"],"type":"object","properties":{"resources":{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}},"rate":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}},"description":"Rate Limit Overview"}';
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"resources":{"core":{"limit":13,"remaining":13,"reset":13,"used":13},"graphql":{"limit":13,"remaining":13,"reset":13,"used":13},"search":{"limit":13,"remaining":13,"reset":13,"used":13},"source_import":{"limit":13,"remaining":13,"reset":13,"used":13},"integration_manifest":{"limit":13,"remaining":13,"reset":13,"used":13},"code_scanning_upload":{"limit":13,"remaining":13,"reset":13,"used":13},"actions_runner_registration":{"limit":13,"remaining":13,"reset":13,"used":13},"scim":{"limit":13,"remaining":13,"reset":13,"used":13},"dependency_snapshots":{"limit":13,"remaining":13,"reset":13,"used":13}},"rate":{"limit":13,"remaining":13,"reset":13,"used":13}}';
    public function __construct(public Schema\RateLimitOverview\Resources $resources, public Schema\RateLimit $rate)
    {
    }
}
