<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\PrivateRegistries;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\PrivateRegistries\ListOrgPrivateRegistries\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListOrgPrivateRegistries
{
    public const OPERATION_ID    = 'private-registries/list-org-private-registries';
    public const OPERATION_MATCH = 'GET /orgs/{org}/private-registries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PrivateRegistries $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $perPage = 30, int $page = 1): Ok
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\PrivateRegistries\ListOrgPrivateRegistries($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
