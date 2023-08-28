<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetMilestone
{
    public const OPERATION_ID    = 'issues/get-milestone';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/milestones/{milestone_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber $hydrator)
    {
    }

    /** @return Schema\Milestone */
    public function call(string $owner, string $repo, int $milestoneNumber): Milestone|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\GetMilestone($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $milestoneNumber);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Milestone|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
