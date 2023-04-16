<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract7041333d2b9b5cd76273fdfd58068e3b
{
    public const SCHEMA_JSON         = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href_null"},"commits":{"href":"generated_href_null"},"statuses":{"href":"generated_href_null"},"html":{"href":"generated_href_null"},"issue":{"href":"generated_href_null"},"review_comments":{"href":"generated_href_null"},"review_comment":{"href":"generated_href_null"},"self":{"href":"generated_href_null"}}';

    /**
     * comments: Hypermedia Link
     * commits: Hypermedia Link
     * statuses: Hypermedia Link
     * html: Hypermedia Link
     * issue: Hypermedia Link
     * reviewComments: Hypermedia Link
     * reviewComment: Hypermedia Link
     * self: Hypermedia Link
     */
    public function __construct(public Schema\Link $comments, public Schema\Link $commits, public Schema\Link $statuses, public Schema\Link $html, public Schema\Link $issue, #[MapFrom('review_comments')] public Schema\Link $reviewComments, #[MapFrom('review_comment')] public Schema\Link $reviewComment, public Schema\Link $self)
    {
    }
}
