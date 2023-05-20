<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListSelectedReposForOrgSecret
{
    public const OPERATION_ID    = 'dependabot/list-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/secrets/{secret_name}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Ok>
     **/
    public function call(string $org, string $secretName, int $page = 1, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\ListSelectedReposForOrgSecret($this->responseSchemaValidator, $this->hydrator, $org, $secretName, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
