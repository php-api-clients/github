<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateStatusCheckProtection
{
    public const OPERATION_ID    = 'repos/update-status-check-protection';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $branch, array $params): StatusCheckPolicy|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\UpdateStatusCheckProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): StatusCheckPolicy|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
