<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gists;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Delete
{
    public const OPERATION_ID    = 'gists/delete';
    public const OPERATION_MATCH = 'DELETE /gists/{gist_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/gists/{gist_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $gistId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gists\Delete($this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}