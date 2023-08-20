<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Feed;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Links
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    /**
     * timeline: Hypermedia Link with Type
     * user: Hypermedia Link with Type
     * securityAdvisories: Hypermedia Link with Type
     * currentUser: Hypermedia Link with Type
     * currentUserPublic: Hypermedia Link with Type
     * currentUserActor: Hypermedia Link with Type
     * currentUserOrganization: Hypermedia Link with Type
     * repositoryDiscussions: Hypermedia Link with Type
     * repositoryDiscussionsCategory: Hypermedia Link with Type
     */
    public function __construct(public Schema\LinkWithType $timeline, public Schema\LinkWithType $user, #[MapFrom('security_advisories')]
    public Schema\LinkWithType|null $securityAdvisories, #[MapFrom('current_user')]
    public Schema\LinkWithType|null $currentUser, #[MapFrom('current_user_public')]
    public Schema\LinkWithType|null $currentUserPublic, #[MapFrom('current_user_actor')]
    public Schema\LinkWithType|null $currentUserActor, #[MapFrom('current_user_organization')]
    public Schema\LinkWithType|null $currentUserOrganization, #[MapFrom('current_user_organizations')]
    public array|null $currentUserOrganizations, #[MapFrom('repository_discussions')]
    public Schema\LinkWithType|null $repositoryDiscussions, #[MapFrom('repository_discussions_category')]
    public Schema\LinkWithType|null $repositoryDiscussionsCategory,)
    {
    }
}
