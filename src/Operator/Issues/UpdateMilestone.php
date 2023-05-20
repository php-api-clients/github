<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateMilestone
{
    public const OPERATION_ID    = 'issues/update-milestone';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/milestones/{milestone_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Milestone>
     **/
    public function call(string $owner, string $repo, int $milestoneNumber, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\UpdateMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $milestoneNumber);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Milestone {
            return $operation->createResponse($response);
        });
    }
}
