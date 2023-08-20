<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhookRubygemsMetadata
{
    public const SCHEMA_JSON         = '{
    "title": "Ruby Gems metadata",
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "readme": {
            "type": "string"
        },
        "homepage": {
            "type": "string"
        },
        "version_info": {
            "type": "object",
            "properties": {
                "version": {
                    "type": "string"
                }
            }
        },
        "platform": {
            "type": "string"
        },
        "metadata": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        },
        "repo": {
            "type": "string"
        },
        "dependencies": {
            "type": "array",
            "items": {
                "type": "object",
                "additionalProperties": {
                    "type": "string"
                }
            }
        },
        "commit_oid": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Ruby Gems metadata';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "readme": "generated",
    "homepage": "generated",
    "version_info": {
        "version": "generated"
    },
    "platform": "generated",
    "metadata": [],
    "repo": "generated",
    "dependencies": [
        [],
        []
    ],
    "commit_oid": "generated"
}';

    public function __construct(public string|null $name, public string|null $description, public string|null $readme, public string|null $homepage, #[MapFrom('version_info')]
    public Schema\WebhookRubygemsMetadata\VersionInfo|null $versionInfo, public string|null $platform, public Schema\WebhookRubygemsMetadata\Metadata|null $metadata, public string|null $repo, public array|null $dependencies, #[MapFrom('commit_oid')]
    public string|null $commitOid,)
    {
    }
}
