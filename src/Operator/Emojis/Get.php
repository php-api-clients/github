<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Emojis;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Get
{
    public const OPERATION_ID    = 'emojis/get';
    public const OPERATION_MATCH = 'GET /emojis';
    private const METHOD         = 'GET';
    private const PATH           = '/emojis';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Emojis $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Organization|array)>
     **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Emojis\Get($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Organization|array {
            return $operation->createResponse($response);
        });
    }
}
