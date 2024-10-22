<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Package
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "name",
        "namespace",
        "description",
        "ecosystem",
        "package_type",
        "html_url",
        "created_at",
        "updated_at",
        "owner",
        "package_version",
        "registry"
    ],
    "type": "object",
    "properties": {
        "created_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "ecosystem": {
            "type": "string"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "namespace": {
            "type": "string"
        },
        "owner": {
            "title": "User",
            "required": [
                "login",
                "id"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "deleted": {
                    "type": "boolean"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gists_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string",
                    "format": "uri"
                },
                "received_events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "enum": [
                        "Bot",
                        "User",
                        "Organization"
                    ],
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "package_type": {
            "type": "string"
        },
        "package_version": {
            "required": [
                "id",
                "version",
                "summary",
                "name",
                "description",
                "html_url",
                "metadata",
                "package_files",
                "installation_command"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "author": {
                    "title": "User",
                    "required": [
                        "login",
                        "id"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "avatar_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "deleted": {
                            "type": "boolean"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "followers_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "following_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gists_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "received_events_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "repos_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "subscriptions_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "type": {
                            "enum": [
                                "Bot",
                                "User",
                                "Organization"
                            ],
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "body": {
                    "oneOf": [
                        {
                            "type": "string"
                        },
                        {
                            "type": "object"
                        }
                    ]
                },
                "body_html": {
                    "type": "string"
                },
                "container_metadata": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "labels": {
                            "type": [
                                "object",
                                "null"
                            ]
                        },
                        "manifest": {
                            "type": [
                                "object",
                                "null"
                            ]
                        },
                        "tag": {
                            "type": "object",
                            "properties": {
                                "digest": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                }
                            }
                        }
                    }
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
                        "type": "object",
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
                    "type": "string",
                    "format": "uri"
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
                "npm_metadata": {
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
                },
                "nuget_metadata": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "object",
                        "properties": {
                            "id": {
                                "oneOf": [
                                    {
                                        "type": "integer"
                                    },
                                    {
                                        "type": "string"
                                    }
                                ]
                            },
                            "name": {
                                "type": "string"
                            },
                            "value": {
                                "oneOf": [
                                    {
                                        "type": "boolean"
                                    },
                                    {
                                        "type": "string"
                                    },
                                    {
                                        "type": "integer"
                                    },
                                    {
                                        "type": "object",
                                        "properties": {
                                            "url": {
                                                "type": "string"
                                            },
                                            "branch": {
                                                "type": "string"
                                            },
                                            "commit": {
                                                "type": "string"
                                            },
                                            "type": {
                                                "type": "string"
                                            }
                                        }
                                    }
                                ]
                            }
                        }
                    }
                },
                "package_files": {
                    "type": "array",
                    "items": {
                        "required": [
                            "download_url",
                            "id",
                            "name",
                            "sha256",
                            "sha1",
                            "md5",
                            "content_type",
                            "state",
                            "size",
                            "created_at",
                            "updated_at"
                        ],
                        "type": "object",
                        "properties": {
                            "content_type": {
                                "type": "string"
                            },
                            "created_at": {
                                "type": "string"
                            },
                            "download_url": {
                                "type": "string",
                                "format": "uri"
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
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "size": {
                                "type": "integer"
                            },
                            "state": {
                                "type": [
                                    "string",
                                    "null"
                                ]
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
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
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
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "name": {
                            "type": [
                                "string",
                                "null"
                            ]
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
                            "type": "string",
                            "format": "uri"
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
                "source_url": {
                    "type": "string"
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
        },
        "registry": {
            "required": [
                "about_url",
                "name",
                "type",
                "url",
                "vendor"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "about_url": {
                    "type": "string",
                    "format": "uri"
                },
                "name": {
                    "type": "string"
                },
                "type": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "vendor": {
                    "type": "string"
                }
            }
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "description": "Information about the package."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Information about the package.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "created_at": "generated",
    "description": "generated",
    "ecosystem": "generated",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "name": "generated",
    "namespace": "generated",
    "owner": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Organization",
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    },
    "package_type": "generated",
    "package_version": {
        "author": {
            "avatar_url": "https:\\/\\/example.com\\/",
            "deleted": false,
            "email": "generated",
            "events_url": "generated",
            "followers_url": "https:\\/\\/example.com\\/",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "login": "generated",
            "name": "generated",
            "node_id": "generated",
            "organizations_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "type": "Organization",
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        },
        "body": null,
        "body_html": "generated",
        "container_metadata": {
            "labels": [],
            "manifest": [],
            "tag": {
                "digest": "generated",
                "name": "generated"
            }
        },
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
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "installation_command": "generated",
        "manifest": "generated",
        "metadata": [
            [],
            []
        ],
        "name": "generated",
        "npm_metadata": {
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
        },
        "nuget_metadata": null,
        "package_files": [
            {
                "content_type": "generated",
                "created_at": "generated",
                "download_url": "https:\\/\\/example.com\\/",
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
                "download_url": "https:\\/\\/example.com\\/",
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
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Organization",
                "url": "https:\\/\\/example.com\\/",
                "user_view_type": "generated"
            },
            "created_at": "generated",
            "draft": false,
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "name": "generated",
            "prerelease": false,
            "published_at": "generated",
            "tag_name": "generated",
            "target_commitish": "generated",
            "url": "https:\\/\\/example.com\\/"
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
        "source_url": "generated",
        "summary": "generated",
        "tag_name": "generated",
        "target_commitish": "generated",
        "target_oid": "generated",
        "updated_at": "generated",
        "version": "generated"
    },
    "registry": {
        "about_url": "https:\\/\\/example.com\\/",
        "name": "generated",
        "type": "generated",
        "url": "https:\\/\\/example.com\\/",
        "vendor": "generated"
    },
    "updated_at": "generated"
}';

    public function __construct(#[MapFrom('created_at')]
    public string|null $createdAt, public string|null $description, public string $ecosystem, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, public string $name, public string $namespace, public Schema\WebhookPackagePublished\Package\Owner|null $owner, #[MapFrom('package_type')]
    public string $packageType, #[MapFrom('package_version')]
    public Schema\WebhookPackagePublished\Package\PackageVersion|null $packageVersion, public Schema\WebhookPackagePublished\Package\Registry|null $registry, #[MapFrom('updated_at')]
    public string|null $updatedAt,)
    {
    }
}
