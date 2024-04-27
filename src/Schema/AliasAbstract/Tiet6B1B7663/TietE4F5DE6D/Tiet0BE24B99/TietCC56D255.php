<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet6B1B7663\TietE4F5DE6D\Tiet0BE24B99;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietCC56D255
{
    public const SCHEMA_JSON         = '{
    "required": [
        "self",
        "html",
        "issue",
        "comments",
        "review_comments",
        "review_comment",
        "commits",
        "statuses"
    ],
    "type": "object",
    "properties": {
        "comments": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "commits": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "issue": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "review_comment": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "review_comments": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "self": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "statuses": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "comments": {
        "href": "generated"
    },
    "commits": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    },
    "issue": {
        "href": "generated"
    },
    "review_comment": {
        "href": "generated"
    },
    "review_comments": {
        "href": "generated"
    },
    "self": {
        "href": "generated"
    },
    "statuses": {
        "href": "generated"
    }
}';

    public function __construct(public Schema\WebhooksPullRequest5\Links\Comments $comments, public Schema\WebhooksPullRequest5\Links\Commits $commits, public Schema\WebhooksPullRequest5\Links\Html $html, public Schema\WebhooksPullRequest5\Links\Issue $issue, #[MapFrom('review_comment')]
    public Schema\WebhooksPullRequest5\Links\ReviewComment $reviewComment, #[MapFrom('review_comments')]
    public Schema\WebhooksPullRequest5\Links\ReviewComments $reviewComments, public Schema\WebhooksPullRequest5\Links\Self_ $self, public Schema\WebhooksPullRequest5\Links\Statuses $statuses,)
    {
    }
}
