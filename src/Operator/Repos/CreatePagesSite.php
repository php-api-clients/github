<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreatePagesSite
{
    public const OPERATION_ID    = 'repos/create-pages-site';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pages';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/pages';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pages $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Page>
     **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CreatePagesSite($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Page {
            return $operation->createResponse($response);
        });
    }
}