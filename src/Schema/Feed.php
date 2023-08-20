<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Feed
{
    public const SCHEMA_JSON         = '{
    "title": "Feed",
    "required": [
        "_links",
        "timeline_url",
        "user_url"
    ],
    "type": "object",
    "properties": {
        "timeline_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/timeline"
            ]
        },
        "user_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/{user}"
            ]
        },
        "current_user_public_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/octocat"
            ]
        },
        "current_user_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/octocat.private?token=abc123"
            ]
        },
        "current_user_actor_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/octocat.private.actor?token=abc123"
            ]
        },
        "current_user_organization_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/octocat-org"
            ]
        },
        "current_user_organization_urls": {
            "type": "array",
            "items": {
                "type": "string",
                "format": "uri"
            },
            "examples": [
                "https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"
            ]
        },
        "security_advisories_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/security-advisories"
            ]
        },
        "repository_discussions_url": {
            "type": "string",
            "description": "A feed of discussions for a given repository.",
            "examples": [
                "https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions"
            ]
        },
        "repository_discussions_category_url": {
            "type": "string",
            "description": "A feed of discussions for a given repository and category.",
            "examples": [
                "https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}"
            ]
        },
        "_links": {
            "required": [
                "timeline",
                "user"
            ],
            "type": "object",
            "properties": {
                "timeline": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "user": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "security_advisories": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "current_user": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "current_user_public": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "current_user_actor": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "current_user_organization": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "current_user_organizations": {
                    "type": "array",
                    "items": {
                        "title": "Link With Type",
                        "required": [
                            "href",
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "href": {
                                "type": "string"
                            },
                            "type": {
                                "type": "string"
                            }
                        },
                        "description": "Hypermedia Link with Type"
                    }
                },
                "repository_discussions": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                },
                "repository_discussions_category": {
                    "title": "Link With Type",
                    "required": [
                        "href",
                        "type"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    },
                    "description": "Hypermedia Link with Type"
                }
            }
        }
    },
    "description": "Feed"
}';
    public const SCHEMA_TITLE        = 'Feed';
    public const SCHEMA_DESCRIPTION  = 'Feed';
    public const SCHEMA_EXAMPLE_DATA = '{
    "timeline_url": "https:\\/\\/github.com\\/timeline",
    "user_url": "https:\\/\\/github.com\\/{user}",
    "current_user_public_url": "https:\\/\\/github.com\\/octocat",
    "current_user_url": "https:\\/\\/github.com\\/octocat.private?token=abc123",
    "current_user_actor_url": "https:\\/\\/github.com\\/octocat.private.actor?token=abc123",
    "current_user_organization_url": "https:\\/\\/github.com\\/octocat-org",
    "current_user_organization_urls": [
        "https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123",
        "https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"
    ],
    "security_advisories_url": "https:\\/\\/github.com\\/security-advisories",
    "repository_discussions_url": "https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions",
    "repository_discussions_category_url": "https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}",
    "_links": {
        "timeline": {
            "href": "generated",
            "type": "generated"
        },
        "user": {
            "href": "generated",
            "type": "generated"
        },
        "security_advisories": {
            "href": "generated",
            "type": "generated"
        },
        "current_user": {
            "href": "generated",
            "type": "generated"
        },
        "current_user_public": {
            "href": "generated",
            "type": "generated"
        },
        "current_user_actor": {
            "href": "generated",
            "type": "generated"
        },
        "current_user_organization": {
            "href": "generated",
            "type": "generated"
        },
        "current_user_organizations": [
            {
                "href": "generated",
                "type": "generated"
            },
            {
                "href": "generated",
                "type": "generated"
            }
        ],
        "repository_discussions": {
            "href": "generated",
            "type": "generated"
        },
        "repository_discussions_category": {
            "href": "generated",
            "type": "generated"
        }
    }
}';

    /**
     * repositoryDiscussionsUrl: A feed of discussions for a given repository.
     * repositoryDiscussionsCategoryUrl: A feed of discussions for a given repository and category.
     */
    public function __construct(#[MapFrom('timeline_url')]
    public string $timelineUrl, #[MapFrom('user_url')]
    public string $userUrl, #[MapFrom('current_user_public_url')]
    public string|null $currentUserPublicUrl, #[MapFrom('current_user_url')]
    public string|null $currentUserUrl, #[MapFrom('current_user_actor_url')]
    public string|null $currentUserActorUrl, #[MapFrom('current_user_organization_url')]
    public string|null $currentUserOrganizationUrl, #[MapFrom('current_user_organization_urls')]
    public array|null $currentUserOrganizationUrls, #[MapFrom('security_advisories_url')]
    public string|null $securityAdvisoriesUrl, #[MapFrom('repository_discussions_url')]
    public string|null $repositoryDiscussionsUrl, #[MapFrom('repository_discussions_category_url')]
    public string|null $repositoryDiscussionsCategoryUrl, #[MapFrom('_links')]
    public Schema\Feed\Links $links,)
    {
    }
}
