<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Codespaces
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateForAuthenticatedUser(array $params): Codespace|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName();
        }

        $operator = new Operator\Codespaces\UpdateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName::class]);

        return $operator->call($arguments['codespace_name'], $params);
    }
}
