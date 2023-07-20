<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Copilot
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function getCopilotOrganizationDetails(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Copilot\Billing::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing();
        }

        $operator = new Operator\Copilot\GetCopilotOrganizationDetails($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing::class]);

        return $operator->call($arguments['org']);
    }

    public function listCopilotSeats(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats();
        }

        $operator = new Operator\Copilot\ListCopilotSeats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats::class]);

        return $operator->call($arguments['org'], $arguments['page'], $arguments['per_page']);
    }

    public function getCopilotSeatAssignmentDetailsForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Members\Username\Copilot::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Copilot::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot();
        }

        $operator = new Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Copilot::class]);

        return $operator->call($arguments['org'], $arguments['username']);
    }
}
