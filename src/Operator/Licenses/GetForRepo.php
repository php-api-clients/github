<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Licenses;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\LicenseContent;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetForRepo
{
    public const OPERATION_ID    = 'licenses/get-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/license';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/license';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\License $hydrator)
    {
    }

    /**
     * @return PromiseInterface<LicenseContent>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Licenses\GetForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): LicenseContent {
            return $operation->createResponse($response);
        });
    }
}
