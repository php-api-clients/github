<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CheckUserCanBeAssignedToIssue
{
    public const OPERATION_ID    = 'issues/check-user-can-be-assigned-to-issue';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, int $issueNumber, string $assignee): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\CheckUserCanBeAssignedToIssue($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber, $assignee);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
