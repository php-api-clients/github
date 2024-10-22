<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PackageVersion
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "version",
        "name",
        "description",
        "summary",
        "body",
        "body_html",
        "html_url",
        "target_commitish",
        "target_oid",
        "created_at",
        "updated_at",
        "metadata",
        "package_files",
        "author",
        "installation_command",
        "package_url"
    ],
    "type": "object",
    "properties": {
        "author": {
            "required": [
                "login",
                "id",
                "node_id",
                "avatar_url",
                "gravatar_id",
                "url",
                "html_url",
                "followers_url",
                "following_url",
                "gists_url",
                "starred_url",
                "subscriptions_url",
                "organizations_url",
                "repos_url",
                "events_url",
                "received_events_url",
                "type",
                "site_admin"
            ],
            "type": "object",
            "properties": {
                "avatar_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "followers_url": {
                    "type": "string"
                },
                "following_url": {
                    "type": "string"
                },
                "gists_url": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string"
                },
                "received_events_url": {
                    "type": "string"
                },
                "repos_url": {
                    "type": "string"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string"
                },
                "subscriptions_url": {
                    "type": "string"
                },
                "type": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "body": {
            "type": "string"
        },
        "body_html": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "docker_metadata": {
            "type": "array",
            "items": {
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "tags": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            }
        },
        "draft": {
            "type": "boolean"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "installation_command": {
            "type": "string"
        },
        "manifest": {
            "type": "string"
        },
        "metadata": {
            "type": "array",
            "items": {
                "type": "object",
                "additionalProperties": true
            }
        },
        "name": {
            "type": "string"
        },
        "package_files": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "content_type": {
                        "type": "string"
                    },
                    "created_at": {
                        "type": "string"
                    },
                    "download_url": {
                        "type": "string"
                    },
                    "id": {
                        "type": "integer"
                    },
                    "md5": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "name": {
                        "type": "string"
                    },
                    "sha1": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "sha256": {
                        "type": "string"
                    },
                    "size": {
                        "type": "integer"
                    },
                    "state": {
                        "type": "string"
                    },
                    "updated_at": {
                        "type": "string"
                    }
                }
            }
        },
        "package_url": {
            "type": "string"
        },
        "prerelease": {
            "type": "boolean"
        },
        "release": {
            "required": [
                "url",
                "html_url",
                "id",
                "tag_name",
                "target_commitish",
                "name",
                "draft",
                "author",
                "prerelease",
                "created_at",
                "published_at"
            ],
            "type": "object",
            "properties": {
                "author": {
                    "required": [
                        "login",
                        "id",
                        "node_id",
                        "avatar_url",
                        "gravatar_id",
                        "url",
                        "html_url",
                        "followers_url",
                        "following_url",
                        "gists_url",
                        "starred_url",
                        "subscriptions_url",
                        "organizations_url",
                        "repos_url",
                        "events_url",
                        "received_events_url",
                        "type",
                        "site_admin"
                    ],
                    "type": "object",
                    "properties": {
                        "avatar_url": {
                            "type": "string"
                        },
                        "events_url": {
                            "type": "string"
                        },
                        "followers_url": {
                            "type": "string"
                        },
                        "following_url": {
                            "type": "string"
                        },
                        "gists_url": {
                            "type": "string"
                        },
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string"
                        },
                        "received_events_url": {
                            "type": "string"
                        },
                        "repos_url": {
                            "type": "string"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string"
                        },
                        "subscriptions_url": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string"
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "created_at": {
                    "type": "string"
                },
                "draft": {
                    "type": "boolean"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "prerelease": {
                    "type": "boolean"
                },
                "published_at": {
                    "type": "string"
                },
                "tag_name": {
                    "type": "string"
                },
                "target_commitish": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                }
            }
        },
        "rubygems_metadata": {
            "type": "array",
            "items": {
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
            }
        },
        "summary": {
            "type": "string"
        },
        "tag_name": {
            "type": "string"
        },
        "target_commitish": {
            "type": "string"
        },
        "target_oid": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "version": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "author": {
        "avatar_url": "generated",
        "events_url": "generated",
        "followers_url": "generated",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "generated",
        "id": 2,
        "login": "generated",
        "node_id": "generated",
        "organizations_url": "generated",
        "received_events_url": "generated",
        "repos_url": "generated",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "generated",
        "type": "generated",
        "url": "generated",
        "user_view_type": "generated"
    },
    "body": "generated",
    "body_html": "generated",
    "created_at": "generated",
    "description": "generated",
    "docker_metadata": [
        {
            "tags": [
                "generated",
                "generated"
            ]
        },
        {
            "tags": [
                "generated",
                "generated"
            ]
        }
    ],
    "draft": false,
    "html_url": "generated",
    "id": 2,
    "installation_command": "generated",
    "manifest": "generated",
    "metadata": [
        [],
        []
    ],
    "name": "generated",
    "package_files": [
        {
            "content_type": "generated",
            "created_at": "generated",
            "download_url": "generated",
            "id": 2,
            "md5": "generated",
            "name": "generated",
            "sha1": "generated",
            "sha256": "generated",
            "size": 4,
            "state": "generated",
            "updated_at": "generated"
        },
        {
            "content_type": "generated",
            "created_at": "generated",
            "download_url": "generated",
            "id": 2,
            "md5": "generated",
            "name": "generated",
            "sha1": "generated",
            "sha256": "generated",
            "size": 4,
            "state": "generated",
            "updated_at": "generated"
        }
    ],
    "package_url": "generated",
    "prerelease": false,
    "release": {
        "author": {
            "avatar_url": "generated",
            "events_url": "generated",
            "followers_url": "generated",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "generated",
            "id": 2,
            "login": "generated",
            "node_id": "generated",
            "organizations_url": "generated",
            "received_events_url": "generated",
            "repos_url": "generated",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "generated",
            "type": "generated",
            "url": "generated",
            "user_view_type": "generated"
        },
        "created_at": "generated",
        "draft": false,
        "html_url": "generated",
        "id": 2,
        "name": "generated",
        "prerelease": false,
        "published_at": "generated",
        "tag_name": "generated",
        "target_commitish": "generated",
        "url": "generated"
    },
    "rubygems_metadata": [
        {
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
        },
        {
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
        }
    ],
    "summary": "generated",
    "tag_name": "generated",
    "target_commitish": "generated",
    "target_oid": "generated",
    "updated_at": "generated",
    "version": "generated"
}';

    public function __construct(public Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Author $author, public string $body, #[MapFrom('body_html')]
    public string $bodyHtml, #[MapFrom('created_at')]
    public string $createdAt, public string $description, #[MapFrom('docker_metadata')]
    public array|null $dockerMetadata, public bool|null $draft, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('installation_command')]
    public string $installationCommand, public string|null $manifest, public array $metadata, public string $name, #[MapFrom('package_files')]
    public array $packageFiles, #[MapFrom('package_url')]
    public string $packageUrl, public bool|null $prerelease, public Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Release|null $release, #[MapFrom('rubygems_metadata')]
    public array|null $rubygemsMetadata, public string $summary, #[MapFrom('tag_name')]
    public string|null $tagName, #[MapFrom('target_commitish')]
    public string $targetCommitish, #[MapFrom('target_oid')]
    public string $targetOid, #[MapFrom('updated_at')]
    public string $updatedAt, public string $version,)
    {
    }
}
