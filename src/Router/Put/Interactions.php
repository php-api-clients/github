<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Interactions
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\InteractionLimitResponse | array{code: int}) */
    public function setRestrictionsForRepo(array $params): InteractionLimitResponse|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits();
        }

        $operator = new Operator\Interactions\SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\InteractionLimits::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setRestrictionsForOrg(array $params): InteractionLimitResponse|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits();
        }

        $operator = new Operator\Interactions\SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\InteractionLimits::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function setRestrictionsForAuthenticatedUser(array $params): InteractionLimitResponse|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits();
        }

        $operator = new Operator\Interactions\SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\InteractionLimits::class]);

        return $operator->call($params);
    }
}
