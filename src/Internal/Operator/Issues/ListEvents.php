<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListEvents
{
    public const OPERATION_ID    = 'issues/list-events';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/events';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events $hydrator)
    {
    }

    /** @return Observable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent> */
    public function call(string $owner, string $repo, int $issueNumber, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\ListEvents($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
