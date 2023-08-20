<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Oidc
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getOidcCustomSubTemplateForOrg(string $org): Schema\OidcCustomSub
    {
        if (array_key_exists(Operator\Oidc\GetOidcCustomSubTemplateForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Oidc\GetOidcCustomSubTemplateForOrg::class] = new Operator\Oidc\GetOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->operator[Operator\Oidc\GetOidcCustomSubTemplateForOrg::class]->call($org);
    }

    public function updateOidcCustomSubTemplateForOrg(string $org, array $params): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Oidc\UpdateOidcCustomSubTemplateForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Oidc\UpdateOidcCustomSubTemplateForOrg::class] = new Operator\Oidc\UpdateOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->operator[Operator\Oidc\UpdateOidcCustomSubTemplateForOrg::class]->call($org, $params);
    }
}
