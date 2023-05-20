<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhookRubygemsMetadata
{
    public const SCHEMA_JSON         = '{"title":"Ruby Gems metadata","type":"object","properties":{"name":{"type":"string"},"description":{"type":"string"},"readme":{"type":"string"},"homepage":{"type":"string"},"version_info":{"type":"object","properties":{"version":{"type":"string"}}},"platform":{"type":"string"},"metadata":{"type":"object","additionalProperties":{"type":"string"}},"repo":{"type":"string"},"dependencies":{"type":"array","items":{"type":"object","additionalProperties":{"type":"string"}}},"commit_oid":{"type":"string"}}}';
    public const SCHEMA_TITLE        = 'Ruby Gems metadata';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","description":"generated","readme":"generated","homepage":"generated","version_info":{"version":"generated"},"platform":"generated","metadata":"generated","repo":"generated","dependencies":[[],[]],"commit_oid":"generated"}';

    public function __construct(public ?string $name, public ?string $description, public ?string $readme, public ?string $homepage, #[MapFrom('version_info')] public ?Schema\WebhookRubygemsMetadata\VersionInfo $versionInfo, public ?string $platform, public string $metadata, public ?string $repo, public ?array $dependencies, #[MapFrom('commit_oid')] public ?string $commitOid)
    {
    }
}
