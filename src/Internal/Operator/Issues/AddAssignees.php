<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AddAssignees
{
    public const OPERATION_ID    = 'issues/add-assignees';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees $hydrator)
    {
    }

    /** @return Schema\Issue */
    public function call(string $owner, string $repo, int $issueNumber, array $params): Issue|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\AddAssignees($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Issue|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
