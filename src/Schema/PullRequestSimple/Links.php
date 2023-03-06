<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PullRequestSimple;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href"},"commits":{"href":"generated_href"},"statuses":{"href":"generated_href"},"html":{"href":"generated_href"},"issue":{"href":"generated_href"},"review_comments":{"href":"generated_href"},"review_comment":{"href":"generated_href"},"self":{"href":"generated_href"}}';
    /**
     * comments: Hypermedia Link
     * commits: Hypermedia Link
     * statuses: Hypermedia Link
     * html: Hypermedia Link
     * issue: Hypermedia Link
     * review_comments: Hypermedia Link
     * review_comment: Hypermedia Link
     * self: Hypermedia Link
     */
    public function __construct(public ?Schema\Link $comments, public ?Schema\Link $commits, public ?Schema\Link $statuses, public ?Schema\Link $html, public ?Schema\Link $issue, public ?Schema\Link $review_comments, public ?Schema\Link $review_comment, public ?Schema\Link $self)
    {
    }
}
