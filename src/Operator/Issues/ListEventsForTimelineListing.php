<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListEventsForTimelineListing
{
    public const OPERATION_ID    = 'issues/list-events-for-timeline';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/issues/{issue_number}/timeline';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/timeline';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline $hydrator)
    {
    }

    /** @return iterable<(Schema\LabeledIssueEvent | Schema\UnlabeledIssueEvent | Schema\MilestonedIssueEvent | Schema\DemilestonedIssueEvent | Schema\RenamedIssueEvent | Schema\ReviewRequestedIssueEvent | Schema\ReviewRequestRemovedIssueEvent | Schema\ReviewDismissedIssueEvent | Schema\LockedIssueEvent | Schema\AddedToProjectIssueEvent | Schema\MovedColumnInProjectIssueEvent | Schema\RemovedFromProjectIssueEvent | Schema\ConvertedNoteToIssueIssueEvent | Schema\TimelineCommentEvent | Schema\TimelineCrossReferencedEvent | Schema\TimelineCommittedEvent | Schema\TimelineReviewedEvent | Schema\TimelineLineCommentedEvent | Schema\TimelineCommitCommentedEvent | Schema\TimelineAssignedIssueEvent | Schema\TimelineUnassignedIssueEvent | Schema\StateChangeIssueEvent)> */
    public function call(string $owner, string $repo, int $issueNumber, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\ListEventsForTimelineListing($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
