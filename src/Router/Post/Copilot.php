<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json;
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

    /** @return (Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created | array{code: int}) */
    public function addCopilotForBusinessSeatsForTeams(array $params): Created|array
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

        $operator = new Operator\Copilot\AddCopilotForBusinessSeatsForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return (Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json | array{code: int}) */
    public function addCopilotForBusinessSeatsForUsers(array $params): Json|array
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

        $operator = new Operator\Copilot\AddCopilotForBusinessSeatsForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers::class]);

        return $operator->call($arguments['org'], $params);
    }
}
