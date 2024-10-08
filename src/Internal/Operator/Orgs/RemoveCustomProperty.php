<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveCustomProperty
{
    public const OPERATION_ID    = 'orgs/remove-custom-property';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/properties/schema/{custom_property_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $customPropertyName): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\RemoveCustomProperty($this->responseSchemaValidator, $this->hydrator, $org, $customPropertyName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
