<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\RateLimitOverview;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Resources
{
    public const SCHEMA_JSON = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"core":{"limit":13,"remaining":13,"reset":13,"used":13},"graphql":{"limit":13,"remaining":13,"reset":13,"used":13},"search":{"limit":13,"remaining":13,"reset":13,"used":13},"source_import":{"limit":13,"remaining":13,"reset":13,"used":13},"integration_manifest":{"limit":13,"remaining":13,"reset":13,"used":13},"code_scanning_upload":{"limit":13,"remaining":13,"reset":13,"used":13},"actions_runner_registration":{"limit":13,"remaining":13,"reset":13,"used":13},"scim":{"limit":13,"remaining":13,"reset":13,"used":13},"dependency_snapshots":{"limit":13,"remaining":13,"reset":13,"used":13}}';
    public function __construct(public Schema\RateLimit $core, public ?Schema\RateLimit $graphql, public Schema\RateLimit $search, #[\EventSauce\ObjectHydrator\MapFrom('source_import')] public ?Schema\RateLimit $sourceImport, #[\EventSauce\ObjectHydrator\MapFrom('integration_manifest')] public ?Schema\RateLimit $integrationManifest, #[\EventSauce\ObjectHydrator\MapFrom('code_scanning_upload')] public ?Schema\RateLimit $codeScanningUpload, #[\EventSauce\ObjectHydrator\MapFrom('actions_runner_registration')] public ?Schema\RateLimit $actionsRunnerRegistration, public ?Schema\RateLimit $scim, #[\EventSauce\ObjectHydrator\MapFrom('dependency_snapshots')] public ?Schema\RateLimit $dependencySnapshots)
    {
    }
}
