<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RateLimitOverview;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Resources
{
    public const SCHEMA_JSON         = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"core":{"limit":5,"remaining":9,"reset":5,"used":4},"graphql":{"limit":5,"remaining":9,"reset":5,"used":4},"search":{"limit":5,"remaining":9,"reset":5,"used":4},"code_search":{"limit":5,"remaining":9,"reset":5,"used":4},"source_import":{"limit":5,"remaining":9,"reset":5,"used":4},"integration_manifest":{"limit":5,"remaining":9,"reset":5,"used":4},"code_scanning_upload":{"limit":5,"remaining":9,"reset":5,"used":4},"actions_runner_registration":{"limit":5,"remaining":9,"reset":5,"used":4},"scim":{"limit":5,"remaining":9,"reset":5,"used":4},"dependency_snapshots":{"limit":5,"remaining":9,"reset":5,"used":4}}';

    public function __construct(public Schema\RateLimit $core, public Schema\RateLimit|null $graphql, public Schema\RateLimit $search, #[MapFrom('code_search')]
    public Schema\RateLimit|null $codeSearch, #[MapFrom('source_import')]
    public Schema\RateLimit|null $sourceImport, #[MapFrom('integration_manifest')]
    public Schema\RateLimit|null $integrationManifest, #[MapFrom('code_scanning_upload')]
    public Schema\RateLimit|null $codeScanningUpload, #[MapFrom('actions_runner_registration')]
    public Schema\RateLimit|null $actionsRunnerRegistration, public Schema\RateLimit|null $scim, #[MapFrom('dependency_snapshots')]
    public Schema\RateLimit|null $dependencySnapshots,)
    {
    }
}
