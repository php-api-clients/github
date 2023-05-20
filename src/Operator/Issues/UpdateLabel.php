<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateLabel
{
    public const OPERATION_ID    = 'issues/update-label';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/labels/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/labels/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Labels\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Label>
     **/
    public function call(string $owner, string $repo, string $name, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\UpdateLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $name);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Label {
            return $operation->createResponse($response);
        });
    }
}
