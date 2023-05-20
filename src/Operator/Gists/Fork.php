<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gists;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Fork
{
    public const OPERATION_ID    = 'gists/fork';
    public const OPERATION_MATCH = 'POST /gists/{gist_id}/forks';
    private const METHOD         = 'POST';
    private const PATH           = '/gists/{gist_id}/forks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Forks $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(BaseGist|array)>
     **/
    public function call(string $gistId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gists\Fork($this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BaseGist|array {
            return $operation->createResponse($response);
        });
    }
}
