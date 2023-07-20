<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Copilot
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getCopilotOrganizationDetails(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\GetCopilotOrganizationDetails::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\GetCopilotOrganizationDetails::class] = new Operator\Copilot\GetCopilotOrganizationDetails($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing());
        }

        return $this->operator[Operator\Copilot\GetCopilotOrganizationDetails::class]->call($org);
    }

    public function listCopilotSeats(string $org, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\ListCopilotSeats::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\ListCopilotSeats::class] = new Operator\Copilot\ListCopilotSeats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats());
        }

        return $this->operator[Operator\Copilot\ListCopilotSeats::class]->call($org, $page, $perPage);
    }

    public function addCopilotForBusinessSeatsForTeams(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\AddCopilotForBusinessSeatsForTeams::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\AddCopilotForBusinessSeatsForTeams::class] = new Operator\Copilot\AddCopilotForBusinessSeatsForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->operator[Operator\Copilot\AddCopilotForBusinessSeatsForTeams::class]->call($org, $params);
    }

    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\CancelCopilotSeatAssignmentForTeams::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\CancelCopilotSeatAssignmentForTeams::class] = new Operator\Copilot\CancelCopilotSeatAssignmentForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->operator[Operator\Copilot\CancelCopilotSeatAssignmentForTeams::class]->call($org, $params);
    }

    public function addCopilotForBusinessSeatsForUsers(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\AddCopilotForBusinessSeatsForUsers::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\AddCopilotForBusinessSeatsForUsers::class] = new Operator\Copilot\AddCopilotForBusinessSeatsForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->operator[Operator\Copilot\AddCopilotForBusinessSeatsForUsers::class]->call($org, $params);
    }

    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\CancelCopilotSeatAssignmentForUsers::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\CancelCopilotSeatAssignmentForUsers::class] = new Operator\Copilot\CancelCopilotSeatAssignmentForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->operator[Operator\Copilot\CancelCopilotSeatAssignmentForUsers::class]->call($org, $params);
    }

    public function getCopilotSeatAssignmentDetailsForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser::class, $this->operator) === false) {
            $this->operator[Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser::class] = new Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot());
        }

        return $this->operator[Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser::class]->call($org, $username);
    }
}
