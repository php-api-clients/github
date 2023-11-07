<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CheckUserCanBeAssigned
{
    public const OPERATION_ID    = 'issues/check-user-can-be-assigned';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/assignees/{assignee}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $assignee): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\CheckUserCanBeAssigned($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $assignee);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
