<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\OrgCustomProperty;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateOrUpdateCustomProperty
{
    public const OPERATION_ID    = 'orgs/create-or-update-custom-property';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/properties/schema/{custom_property_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $customPropertyName, array $params): OrgCustomProperty|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\CreateOrUpdateCustomProperty($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $customPropertyName);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgCustomProperty|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
