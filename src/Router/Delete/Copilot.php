<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok | array{code: int}) */
    public function cancelCopilotSeatAssignmentForTeams(array $params): Ok|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams();
        }

        $operator = new Operator\Copilot\CancelCopilotSeatAssignmentForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return (Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function cancelCopilotSeatAssignmentForUsers(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers();
        }

        $operator = new Operator\Copilot\CancelCopilotSeatAssignmentForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers::class]);

        return $operator->call($arguments['org'], $params);
    }
}
