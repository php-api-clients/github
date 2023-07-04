<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAutolink
{
    public const OPERATION_ID    = 'repos/get-autolink';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/autolinks/{autolink_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId $hydrator)
    {
    }

    /** @return PromiseInterface<Autolink> **/
    public function call(string $owner, string $repo, int $autolinkId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetAutolink($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $autolinkId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Autolink {
            return $operation->createResponse($response);
        });
    }
}
