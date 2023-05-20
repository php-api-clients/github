<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPublicEventsForRepoNetwork
{
    public const OPERATION_ID    = 'activity/list-public-events-for-repo-network';
    public const OPERATION_MATCH = 'GET /networks/{owner}/{repo}/events';
    private const METHOD         = 'GET';
    private const PATH           = '/networks/{owner}/{repo}/events';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Networks\Owner\Repo\Events $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(BasicError|array)>
     **/
    public function call(string $owner, string $repo, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\ListPublicEventsForRepoNetwork($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BasicError|array {
            return $operation->createResponse($response);
        });
    }
}
