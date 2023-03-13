<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RateLimitOverview;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Resources
{
    public const SCHEMA_JSON = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"core":{"limit":13,"remaining":13,"reset":13,"used":13},"graphql":{"limit":13,"remaining":13,"reset":13,"used":13},"search":{"limit":13,"remaining":13,"reset":13,"used":13},"source_import":{"limit":13,"remaining":13,"reset":13,"used":13},"integration_manifest":{"limit":13,"remaining":13,"reset":13,"used":13},"code_scanning_upload":{"limit":13,"remaining":13,"reset":13,"used":13},"actions_runner_registration":{"limit":13,"remaining":13,"reset":13,"used":13},"scim":{"limit":13,"remaining":13,"reset":13,"used":13},"dependency_snapshots":{"limit":13,"remaining":13,"reset":13,"used":13}}';
    public function __construct(public Schema\RateLimit $core, public ?Schema\RateLimit $graphql, public Schema\RateLimit $search, public ?Schema\RateLimit $source_import, public ?Schema\RateLimit $integration_manifest, public ?Schema\RateLimit $code_scanning_upload, public ?Schema\RateLimit $actions_runner_registration, public ?Schema\RateLimit $scim, public ?Schema\RateLimit $dependency_snapshots)
    {
    }
}
