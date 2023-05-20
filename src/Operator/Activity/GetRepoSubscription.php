<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRepoSubscription
{
    public const OPERATION_ID    = 'activity/get-repo-subscription';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/subscription';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/subscription';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Subscription $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(RepositorySubscription|array)>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\GetRepoSubscription($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositorySubscription|array {
            return $operation->createResponse($response);
        });
    }
}
