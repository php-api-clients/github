<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAlert
{
    public const OPERATION_ID    = 'dependabot/get-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/alerts/{alert_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(DependabotAlert|array)>
     **/
    public function call(string $owner, string $repo, int $alertNumber): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\GetAlert($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alertNumber);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DependabotAlert|array {
            return $operation->createResponse($response);
        });
    }
}