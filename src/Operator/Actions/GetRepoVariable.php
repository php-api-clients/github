<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRepoVariable
{
    public const OPERATION_ID    = 'actions/get-repo-variable';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/variables/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsVariable>
     **/
    public function call(string $owner, string $repo, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetRepoVariable($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsVariable {
            return $operation->createResponse($response);
        });
    }
}
