<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class NpmMetadata
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "name": {
            "type": "string"
        },
        "version": {
            "type": "string"
        },
        "npm_user": {
            "type": "string"
        },
        "author": {
            "type": [
                "object",
                "null"
            ]
        },
        "bugs": {
            "type": [
                "object",
                "null"
            ]
        },
        "dependencies": {
            "type": "object"
        },
        "dev_dependencies": {
            "type": "object"
        },
        "peer_dependencies": {
            "type": "object"
        },
        "optional_dependencies": {
            "type": "object"
        },
        "description": {
            "type": "string"
        },
        "dist": {
            "type": [
                "object",
                "null"
            ]
        },
        "git_head": {
            "type": "string"
        },
        "homepage": {
            "type": "string"
        },
        "license": {
            "type": "string"
        },
        "main": {
            "type": "string"
        },
        "repository": {
            "type": [
                "object",
                "null"
            ]
        },
        "scripts": {
            "type": "object"
        },
        "id": {
            "type": "string"
        },
        "node_version": {
            "type": "string"
        },
        "npm_version": {
            "type": "string"
        },
        "has_shrinkwrap": {
            "type": "boolean"
        },
        "maintainers": {
            "type": "array",
            "items": {
                "type": "object"
            }
        },
        "contributors": {
            "type": "array",
            "items": {
                "type": "object"
            }
        },
        "engines": {
            "type": "object"
        },
        "keywords": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "files": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "bin": {
            "type": "object"
        },
        "man": {
            "type": "object"
        },
        "directories": {
            "type": [
                "object",
                "null"
            ]
        },
        "os": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "cpu": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "readme": {
            "type": "string"
        },
        "installation_command": {
            "type": "string"
        },
        "release_id": {
            "type": "integer"
        },
        "commit_oid": {
            "type": "string"
        },
        "published_via_actions": {
            "type": "boolean"
        },
        "deleted_by_id": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "version": "generated",
    "npm_user": "generated",
    "author": [],
    "bugs": [],
    "dependencies": [],
    "dev_dependencies": [],
    "peer_dependencies": [],
    "optional_dependencies": [],
    "description": "generated",
    "dist": [],
    "git_head": "generated",
    "homepage": "generated",
    "license": "generated",
    "main": "generated",
    "repository": [],
    "scripts": [],
    "id": "generated",
    "node_version": "generated",
    "npm_version": "generated",
    "has_shrinkwrap": false,
    "maintainers": [
        [],
        []
    ],
    "contributors": [
        [],
        []
    ],
    "engines": [],
    "keywords": [
        "generated",
        "generated"
    ],
    "files": [
        "generated",
        "generated"
    ],
    "bin": [],
    "man": [],
    "directories": [],
    "os": [
        "generated",
        "generated"
    ],
    "cpu": [
        "generated",
        "generated"
    ],
    "readme": "generated",
    "installation_command": "generated",
    "release_id": 10,
    "commit_oid": "generated",
    "published_via_actions": false,
    "deleted_by_id": 13
}';

    public function __construct(public string|null $name, public string|null $version, #[MapFrom('npm_user')]
    public string|null $npmUser, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Author|null $author, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bugs|null $bugs, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies|null $dependencies, #[MapFrom('dev_dependencies')]
    public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\DevDependencies|null $devDependencies, #[MapFrom('peer_dependencies')]
    public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\PeerDependencies|null $peerDependencies, #[MapFrom('optional_dependencies')]
    public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\OptionalDependencies|null $optionalDependencies, public string|null $description, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dist|null $dist, #[MapFrom('git_head')]
    public string|null $gitHead, public string|null $homepage, public string|null $license, public string|null $main, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Repository|null $repository, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Scripts|null $scripts, public string|null $id, #[MapFrom('node_version')]
    public string|null $nodeVersion, #[MapFrom('npm_version')]
    public string|null $npmVersion, #[MapFrom('has_shrinkwrap')]
    public bool|null $hasShrinkwrap, public array|null $maintainers, public array|null $contributors, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Engines|null $engines, public array|null $keywords, public array|null $files, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bin|null $bin, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Man|null $man, public Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Directories|null $directories, public array|null $os, public array|null $cpu, public string|null $readme, #[MapFrom('installation_command')]
    public string|null $installationCommand, #[MapFrom('release_id')]
    public int|null $releaseId, #[MapFrom('commit_oid')]
    public string|null $commitOid, #[MapFrom('published_via_actions')]
    public bool|null $publishedViaActions, #[MapFrom('deleted_by_id')]
    public int|null $deletedById,)
    {
    }
}
