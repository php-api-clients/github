<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Pulls;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Get
{
    public const OPERATION_ID    = 'pulls/get';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(PullRequest|array)>
     **/
    public function call(string $owner, string $repo, int $pullNumber): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Pulls\Get($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequest|array {
            return $operation->createResponse($response);
        });
    }
}
