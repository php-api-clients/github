<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ReviewDismissedIssueEvent;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DismissedReview
{
    public const SCHEMA_JSON = '{"required":["state","review_id","dismissal_message"],"type":"object","properties":{"state":{"type":"string"},"review_id":{"type":"integer"},"dismissal_message":{"type":["string","null"]},"dismissal_commit_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state_null","review_id":13,"dismissal_message":"generated_dismissal_message_null","dismissal_commit_id":"generated_dismissal_commit_id_null"}';
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('review_id')] public int $reviewId, #[\EventSauce\ObjectHydrator\MapFrom('dismissal_message')] public ?string $dismissalMessage, #[\EventSauce\ObjectHydrator\MapFrom('dismissal_commit_id')] public ?string $dismissalCommitId)
    {
    }
}
