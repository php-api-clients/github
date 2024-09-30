<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\WebHook;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\LicenseSimple;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks\CustomProperties;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Owner;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class CheckSuite implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($payload),
                'ApiClients\Client\GitHub\Schema\EnterpriseWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Committer($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Committer($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\CustomProperties' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️CustomProperties($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted(array $payload): WebhookCheckSuiteCompleted
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_checkSuite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'checkSuite';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['checkSuite'] = $value;

            after_checkSuite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookCheckSuiteCompleted::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookCheckSuiteCompleted(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_checkRunsUrl;
            }

            $properties['checkRunsUrl'] = $value;

            after_checkRunsUrl:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_headCommit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'headCommit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['headCommit'] = $value;

            after_headCommit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latestCheckRunsCount;
            }

            $properties['latestCheckRunsCount'] = $value;

            after_latestCheckRunsCount:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runsRerequestable'] = null;
                goto after_runsRerequestable;
            }

            $properties['runsRerequestable'] = $value;

            after_runsRerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App(array $payload): App
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new App(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner(array $payload): Owner
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $properties['deleted'] = null;
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Owner(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions(array $payload): Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['administration'] ?? null;

            if ($value === null) {
                $properties['administration'] = null;
                goto after_administration;
            }

            $properties['administration'] = $value;

            after_administration:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['content_references'] ?? null;

            if ($value === null) {
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

            $value = $payload['contents'] ?? null;

            if ($value === null) {
                $properties['contents'] = null;
                goto after_contents;
            }

            $properties['contents'] = $value;

            after_contents:

            $value = $payload['deployments'] ?? null;

            if ($value === null) {
                $properties['deployments'] = null;
                goto after_deployments;
            }

            $properties['deployments'] = $value;

            after_deployments:

            $value = $payload['discussions'] ?? null;

            if ($value === null) {
                $properties['discussions'] = null;
                goto after_discussions;
            }

            $properties['discussions'] = $value;

            after_discussions:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $properties['emails'] = null;
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            $properties['environments'] = $value;

            after_environments:

            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['keys'] ?? null;

            if ($value === null) {
                $properties['keys'] = null;
                goto after_keys;
            }

            $properties['keys'] = $value;

            after_keys:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['organization_administration'] ?? null;

            if ($value === null) {
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit(array $payload): HeadCommit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_treeId;
            }

            $properties['treeId'] = $value;

            after_treeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(HeadCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new HeadCommit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(array $payload): Author
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Author(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer(array $payload): Committer
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Committer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Committer(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks(array $payload): EnterpriseWebhooks
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['website_url'] ?? null;

            if ($value === null) {
                $properties['websiteUrl'] = null;
                goto after_websiteUrl;
            }

            $properties['websiteUrl'] = $value;

            after_websiteUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\EnterpriseWebhooks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnterpriseWebhooks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnterpriseWebhooks(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\EnterpriseWebhooks', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(array $payload): SimpleInstallation
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleInstallation(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks(array $payload): OrganizationSimpleWebhooks
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_members_url';
                goto after_publicMembersUrl;
            }

            $properties['publicMembersUrl'] = $value;

            after_publicMembersUrl:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(OrganizationSimpleWebhooks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new OrganizationSimpleWebhooks(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks(array $payload): RepositoryWebhooks
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_url';
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['custom_properties'] ?? null;

            if ($value === null) {
                $properties['customProperties'] = null;
                goto after_customProperties;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'customProperties';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️CustomProperties($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['customProperties'] = $value;

            after_customProperties:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_issues';
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_projects';
                goto after_hasProjects;
            }

            $properties['hasProjects'] = $value;

            after_hasProjects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_wiki';
                goto after_hasWiki;
            }

            $properties['hasWiki'] = $value;

            after_hasWiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $properties['hasDiscussions'] = null;
                goto after_hasDiscussions;
            }

            $properties['hasDiscussions'] = $value;

            after_hasDiscussions:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'disabled';
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $properties['pushedAt'] = null;
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['template_repository'] ?? null;

            if ($value === null) {
                $properties['templateRepository'] = null;
                goto after_templateRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'templateRepository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['templateRepository'] = $value;

            after_templateRepository:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['tempCloneToken'] = null;
                goto after_tempCloneToken;
            }

            $properties['tempCloneToken'] = $value;

            after_tempCloneToken:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['useSquashPrTitleAsDefault'] = null;
                goto after_useSquashPrTitleAsDefault;
            }

            $properties['useSquashPrTitleAsDefault'] = $value;

            after_useSquashPrTitleAsDefault:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitTitle'] = null;
                goto after_squashMergeCommitTitle;
            }

            $properties['squashMergeCommitTitle'] = $value;

            after_squashMergeCommitTitle:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitMessage'] = null;
                goto after_squashMergeCommitMessage;
            }

            $properties['squashMergeCommitMessage'] = $value;

            after_squashMergeCommitMessage:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['mergeCommitTitle'] = null;
                goto after_mergeCommitTitle;
            }

            $properties['mergeCommitTitle'] = $value;

            after_mergeCommitTitle:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['mergeCommitMessage'] = null;
                goto after_mergeCommitMessage;
            }

            $properties['mergeCommitMessage'] = $value;

            after_mergeCommitMessage:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allowForking'] = null;
                goto after_allowForking;
            }

            $properties['allowForking'] = $value;

            after_allowForking:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['webCommitSignoffRequired'] = null;
                goto after_webCommitSignoffRequired;
            }

            $properties['webCommitSignoffRequired'] = $value;

            after_webCommitSignoffRequired:

            $value = $payload['subscribers_count'] ?? null;

            if ($value === null) {
                $properties['subscribersCount'] = null;
                goto after_subscribersCount;
            }

            $properties['subscribersCount'] = $value;

            after_subscribersCount:

            $value = $payload['network_count'] ?? null;

            if ($value === null) {
                $properties['networkCount'] = null;
                goto after_networkCount;
            }

            $properties['networkCount'] = $value;

            after_networkCount:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['masterBranch'] = null;
                goto after_masterBranch;
            }

            $properties['masterBranch'] = $value;

            after_masterBranch:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

            $value = $payload['anonymous_access_enabled'] ?? null;

            if ($value === null) {
                $properties['anonymousAccessEnabled'] = null;
                goto after_anonymousAccessEnabled;
            }

            $properties['anonymousAccessEnabled'] = $value;

            after_anonymousAccessEnabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RepositoryWebhooks::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RepositoryWebhooks(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(array $payload): LicenseSimple
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $properties['spdxId'] = null;
                goto after_spdxId;
            }

            $properties['spdxId'] = $value;

            after_spdxId:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(LicenseSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new LicenseSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): SimpleUser
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SimpleUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $properties['triage'] = null;
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository(array $payload): TemplateRepository
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $properties['fullName'] = null;
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $properties['private'] = null;
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $properties['fork'] = null;
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $properties['archiveUrl'] = null;
                goto after_archiveUrl;
            }

            $properties['archiveUrl'] = $value;

            after_archiveUrl:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $properties['assigneesUrl'] = null;
                goto after_assigneesUrl;
            }

            $properties['assigneesUrl'] = $value;

            after_assigneesUrl:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $properties['blobsUrl'] = null;
                goto after_blobsUrl;
            }

            $properties['blobsUrl'] = $value;

            after_blobsUrl:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $properties['branchesUrl'] = null;
                goto after_branchesUrl;
            }

            $properties['branchesUrl'] = $value;

            after_branchesUrl:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $properties['collaboratorsUrl'] = null;
                goto after_collaboratorsUrl;
            }

            $properties['collaboratorsUrl'] = $value;

            after_collaboratorsUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $properties['commentsUrl'] = null;
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $properties['commitsUrl'] = null;
                goto after_commitsUrl;
            }

            $properties['commitsUrl'] = $value;

            after_commitsUrl:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $properties['compareUrl'] = null;
                goto after_compareUrl;
            }

            $properties['compareUrl'] = $value;

            after_compareUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $properties['contentsUrl'] = null;
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $properties['contributorsUrl'] = null;
                goto after_contributorsUrl;
            }

            $properties['contributorsUrl'] = $value;

            after_contributorsUrl:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $properties['deploymentsUrl'] = null;
                goto after_deploymentsUrl;
            }

            $properties['deploymentsUrl'] = $value;

            after_deploymentsUrl:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $properties['downloadsUrl'] = null;
                goto after_downloadsUrl;
            }

            $properties['downloadsUrl'] = $value;

            after_downloadsUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $properties['forksUrl'] = null;
                goto after_forksUrl;
            }

            $properties['forksUrl'] = $value;

            after_forksUrl:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $properties['gitCommitsUrl'] = null;
                goto after_gitCommitsUrl;
            }

            $properties['gitCommitsUrl'] = $value;

            after_gitCommitsUrl:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $properties['gitRefsUrl'] = null;
                goto after_gitRefsUrl;
            }

            $properties['gitRefsUrl'] = $value;

            after_gitRefsUrl:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $properties['gitTagsUrl'] = null;
                goto after_gitTagsUrl;
            }

            $properties['gitTagsUrl'] = $value;

            after_gitTagsUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['gitUrl'] = null;
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $properties['issueCommentUrl'] = null;
                goto after_issueCommentUrl;
            }

            $properties['issueCommentUrl'] = $value;

            after_issueCommentUrl:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $properties['issueEventsUrl'] = null;
                goto after_issueEventsUrl;
            }

            $properties['issueEventsUrl'] = $value;

            after_issueEventsUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $properties['issuesUrl'] = null;
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $properties['keysUrl'] = null;
                goto after_keysUrl;
            }

            $properties['keysUrl'] = $value;

            after_keysUrl:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $properties['labelsUrl'] = null;
                goto after_labelsUrl;
            }

            $properties['labelsUrl'] = $value;

            after_labelsUrl:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $properties['languagesUrl'] = null;
                goto after_languagesUrl;
            }

            $properties['languagesUrl'] = $value;

            after_languagesUrl:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $properties['mergesUrl'] = null;
                goto after_mergesUrl;
            }

            $properties['mergesUrl'] = $value;

            after_mergesUrl:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $properties['milestonesUrl'] = null;
                goto after_milestonesUrl;
            }

            $properties['milestonesUrl'] = $value;

            after_milestonesUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $properties['notificationsUrl'] = null;
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $properties['pullsUrl'] = null;
                goto after_pullsUrl;
            }

            $properties['pullsUrl'] = $value;

            after_pullsUrl:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $properties['releasesUrl'] = null;
                goto after_releasesUrl;
            }

            $properties['releasesUrl'] = $value;

            after_releasesUrl:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $properties['sshUrl'] = null;
                goto after_sshUrl;
            }

            $properties['sshUrl'] = $value;

            after_sshUrl:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $properties['stargazersUrl'] = null;
                goto after_stargazersUrl;
            }

            $properties['stargazersUrl'] = $value;

            after_stargazersUrl:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $properties['statusesUrl'] = null;
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $properties['subscribersUrl'] = null;
                goto after_subscribersUrl;
            }

            $properties['subscribersUrl'] = $value;

            after_subscribersUrl:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionUrl'] = null;
                goto after_subscriptionUrl;
            }

            $properties['subscriptionUrl'] = $value;

            after_subscriptionUrl:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $properties['tagsUrl'] = null;
                goto after_tagsUrl;
            }

            $properties['tagsUrl'] = $value;

            after_tagsUrl:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $properties['teamsUrl'] = null;
                goto after_teamsUrl;
            }

            $properties['teamsUrl'] = $value;

            after_teamsUrl:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $properties['treesUrl'] = null;
                goto after_treesUrl;
            }

            $properties['treesUrl'] = $value;

            after_treesUrl:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $properties['cloneUrl'] = null;
                goto after_cloneUrl;
            }

            $properties['cloneUrl'] = $value;

            after_cloneUrl:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirrorUrl'] = null;
                goto after_mirrorUrl;
            }

            $properties['mirrorUrl'] = $value;

            after_mirrorUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $properties['hooksUrl'] = null;
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $properties['svnUrl'] = null;
                goto after_svnUrl;
            }

            $properties['svnUrl'] = $value;

            after_svnUrl:

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $properties['forksCount'] = null;
                goto after_forksCount;
            }

            $properties['forksCount'] = $value;

            after_forksCount:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $properties['stargazersCount'] = null;
                goto after_stargazersCount;
            }

            $properties['stargazersCount'] = $value;

            after_stargazersCount:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $properties['watchersCount'] = null;
                goto after_watchersCount;
            }

            $properties['watchersCount'] = $value;

            after_watchersCount:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $properties['size'] = null;
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $properties['defaultBranch'] = null;
                goto after_defaultBranch;
            }

            $properties['defaultBranch'] = $value;

            after_defaultBranch:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $properties['openIssuesCount'] = null;
                goto after_openIssuesCount;
            }

            $properties['openIssuesCount'] = $value;

            after_openIssuesCount:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['isTemplate'] = null;
                goto after_isTemplate;
            }

            $properties['isTemplate'] = $value;

            after_isTemplate:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $properties['topics'] = null;
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $properties['hasIssues'] = null;
                goto after_hasIssues;
            }

            $properties['hasIssues'] = $value;

            after_hasIssues:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $properties['hasProjects'] = null;
                goto after_hasProjects;
            }

            $properties['hasProjects'] = $value;

            after_hasProjects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $properties['hasWiki'] = null;
                goto after_hasWiki;
            }

            $properties['hasWiki'] = $value;

            after_hasWiki:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $properties['hasPages'] = null;
                goto after_hasPages;
            }

            $properties['hasPages'] = $value;

            after_hasPages:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $properties['hasDownloads'] = null;
                goto after_hasDownloads;
            }

            $properties['hasDownloads'] = $value;

            after_hasDownloads:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $properties['archived'] = null;
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $properties['disabled'] = null;
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $properties['pushedAt'] = null;
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allowRebaseMerge'] = null;
                goto after_allowRebaseMerge;
            }

            $properties['allowRebaseMerge'] = $value;

            after_allowRebaseMerge:

            $value = $payload['temp_clone_token'] ?? null;

            if ($value === null) {
                $properties['tempCloneToken'] = null;
                goto after_tempCloneToken;
            }

            $properties['tempCloneToken'] = $value;

            after_tempCloneToken:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allowSquashMerge'] = null;
                goto after_allowSquashMerge;
            }

            $properties['allowSquashMerge'] = $value;

            after_allowSquashMerge:

            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allowAutoMerge'] = null;
                goto after_allowAutoMerge;
            }

            $properties['allowAutoMerge'] = $value;

            after_allowAutoMerge:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['deleteBranchOnMerge'] = null;
                goto after_deleteBranchOnMerge;
            }

            $properties['deleteBranchOnMerge'] = $value;

            after_deleteBranchOnMerge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allowUpdateBranch'] = null;
                goto after_allowUpdateBranch;
            }

            $properties['allowUpdateBranch'] = $value;

            after_allowUpdateBranch:

            $value = $payload['use_squash_pr_title_as_default'] ?? null;

            if ($value === null) {
                $properties['useSquashPrTitleAsDefault'] = null;
                goto after_useSquashPrTitleAsDefault;
            }

            $properties['useSquashPrTitleAsDefault'] = $value;

            after_useSquashPrTitleAsDefault:

            $value = $payload['squash_merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitTitle'] = null;
                goto after_squashMergeCommitTitle;
            }

            $properties['squashMergeCommitTitle'] = $value;

            after_squashMergeCommitTitle:

            $value = $payload['squash_merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['squashMergeCommitMessage'] = null;
                goto after_squashMergeCommitMessage;
            }

            $properties['squashMergeCommitMessage'] = $value;

            after_squashMergeCommitMessage:

            $value = $payload['merge_commit_title'] ?? null;

            if ($value === null) {
                $properties['mergeCommitTitle'] = null;
                goto after_mergeCommitTitle;
            }

            $properties['mergeCommitTitle'] = $value;

            after_mergeCommitTitle:

            $value = $payload['merge_commit_message'] ?? null;

            if ($value === null) {
                $properties['mergeCommitMessage'] = null;
                goto after_mergeCommitMessage;
            }

            $properties['mergeCommitMessage'] = $value;

            after_mergeCommitMessage:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allowMergeCommit'] = null;
                goto after_allowMergeCommit;
            }

            $properties['allowMergeCommit'] = $value;

            after_allowMergeCommit:

            $value = $payload['subscribers_count'] ?? null;

            if ($value === null) {
                $properties['subscribersCount'] = null;
                goto after_subscribersCount;
            }

            $properties['subscribersCount'] = $value;

            after_subscribersCount:

            $value = $payload['network_count'] ?? null;

            if ($value === null) {
                $properties['networkCount'] = null;
                goto after_networkCount;
            }

            $properties['networkCount'] = $value;

            after_networkCount:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(TemplateRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new TemplateRepository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['login'] ?? null;

            if ($value === null) {
                $properties['login'] = null;
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $properties['admin'] = null;
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $properties['push'] = null;
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $properties['triage'] = null;
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $properties['pull'] = null;
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested(array $payload): WebhookCheckSuiteRequested
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_checkSuite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'checkSuite';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['checkSuite'] = $value;

            after_checkSuite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookCheckSuiteRequested::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookCheckSuiteRequested(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_checkRunsUrl;
            }

            $properties['checkRunsUrl'] = $value;

            after_checkRunsUrl:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_headCommit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'headCommit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['headCommit'] = $value;

            after_headCommit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latestCheckRunsCount;
            }

            $properties['latestCheckRunsCount'] = $value;

            after_latestCheckRunsCount:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runsRerequestable'] = null;
                goto after_runsRerequestable;
            }

            $properties['runsRerequestable'] = $value;

            after_runsRerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $properties['deleted'] = null;
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['administration'] ?? null;

            if ($value === null) {
                $properties['administration'] = null;
                goto after_administration;
            }

            $properties['administration'] = $value;

            after_administration:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['content_references'] ?? null;

            if ($value === null) {
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

            $value = $payload['contents'] ?? null;

            if ($value === null) {
                $properties['contents'] = null;
                goto after_contents;
            }

            $properties['contents'] = $value;

            after_contents:

            $value = $payload['deployments'] ?? null;

            if ($value === null) {
                $properties['deployments'] = null;
                goto after_deployments;
            }

            $properties['deployments'] = $value;

            after_deployments:

            $value = $payload['discussions'] ?? null;

            if ($value === null) {
                $properties['discussions'] = null;
                goto after_discussions;
            }

            $properties['discussions'] = $value;

            after_discussions:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $properties['emails'] = null;
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            $properties['environments'] = $value;

            after_environments:

            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['keys'] ?? null;

            if ($value === null) {
                $properties['keys'] = null;
                goto after_keys;
            }

            $properties['keys'] = $value;

            after_keys:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['organization_administration'] ?? null;

            if ($value === null) {
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_treeId;
            }

            $properties['treeId'] = $value;

            after_treeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Author(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Committer(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested(array $payload): WebhookCheckSuiteRerequested
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['check_suite'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_suite';
                goto after_checkSuite;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'checkSuite';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['checkSuite'] = $value;

            after_checkSuite:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookCheckSuiteRerequested::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookCheckSuiteRerequested(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $properties['after'] = null;
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $properties['before'] = null;
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['check_runs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs_url';
                goto after_checkRunsUrl;
            }

            $properties['checkRunsUrl'] = $value;

            after_checkRunsUrl:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['headBranch'] = null;
                goto after_headBranch;
            }

            $properties['headBranch'] = $value;

            after_headBranch:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_commit';
                goto after_headCommit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'headCommit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['headCommit'] = $value;

            after_headCommit:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_headSha;
            }

            $properties['headSha'] = $value;

            after_headSha:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['latest_check_runs_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'latest_check_runs_count';
                goto after_latestCheckRunsCount;
            }

            $properties['latestCheckRunsCount'] = $value;

            after_latestCheckRunsCount:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull_requests';
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['rerequestable'] ?? null;

            if ($value === null) {
                $properties['rerequestable'] = null;
                goto after_rerequestable;
            }

            $properties['rerequestable'] = $value;

            after_rerequestable:

            $value = $payload['runs_rerequestable'] ?? null;

            if ($value === null) {
                $properties['runsRerequestable'] = null;
                goto after_runsRerequestable;
            }

            $properties['runsRerequestable'] = $value;

            after_runsRerequestable:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['external_url'] ?? null;

            if ($value === null) {
                $properties['externalUrl'] = null;
                goto after_externalUrl;
            }

            $properties['externalUrl'] = $value;

            after_externalUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $properties['slug'] = null;
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatarUrl'] = null;
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $properties['deleted'] = null;
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['eventsUrl'] = null;
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followersUrl'] = null;
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['followingUrl'] = null;
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gistsUrl'] = null;
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizationsUrl'] = null;
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['receivedEventsUrl'] = null;
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['reposUrl'] = null;
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['siteAdmin'] = null;
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starredUrl'] = null;
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptionsUrl'] = null;
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['administration'] ?? null;

            if ($value === null) {
                $properties['administration'] = null;
                goto after_administration;
            }

            $properties['administration'] = $value;

            after_administration:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['content_references'] ?? null;

            if ($value === null) {
                $properties['contentReferences'] = null;
                goto after_contentReferences;
            }

            $properties['contentReferences'] = $value;

            after_contentReferences:

            $value = $payload['contents'] ?? null;

            if ($value === null) {
                $properties['contents'] = null;
                goto after_contents;
            }

            $properties['contents'] = $value;

            after_contents:

            $value = $payload['deployments'] ?? null;

            if ($value === null) {
                $properties['deployments'] = null;
                goto after_deployments;
            }

            $properties['deployments'] = $value;

            after_deployments:

            $value = $payload['discussions'] ?? null;

            if ($value === null) {
                $properties['discussions'] = null;
                goto after_discussions;
            }

            $properties['discussions'] = $value;

            after_discussions:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $properties['emails'] = null;
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            $properties['environments'] = $value;

            after_environments:

            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['keys'] ?? null;

            if ($value === null) {
                $properties['keys'] = null;
                goto after_keys;
            }

            $properties['keys'] = $value;

            after_keys:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['organization_administration'] ?? null;

            if ($value === null) {
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['security_scanning_alert'] ?? null;

            if ($value === null) {
                $properties['securityScanningAlert'] = null;
                goto after_securityScanningAlert;
            }

            $properties['securityScanningAlert'] = $value;

            after_securityScanningAlert:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_treeId;
            }

            $properties['treeId'] = $value;

            after_treeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Author(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Committer(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️CustomProperties(array $payload): CustomProperties
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\CustomProperties', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CustomProperties::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CustomProperties(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryWebhooks\CustomProperties', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($object),
                'ApiClients\Client\GitHub\Schema\EnterpriseWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($object),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($object),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository($object),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Author($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Committer($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Author($object),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Committer($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted(mixed $object): mixed
    {
        assert($object instanceof WebhookCheckSuiteCompleted);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $checkSuite                                     = $object->checkSuite;
        $checkSuite                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite($checkSuite);
        after_checkSuite:        $result['check_suite'] = $checkSuite;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $repository                                    = $object->repository;
        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($repository);
        after_repository:        $result['repository'] = $repository;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }

        after_after:        $result['after'] = $after;

        $app                             = $object->app;
        $app                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }

        after_before:        $result['before'] = $before;

        $checkRunsUrl                                        = $object->checkRunsUrl;
        after_checkRunsUrl:        $result['check_runs_url'] = $checkRunsUrl;

        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }

        after_conclusion:        $result['conclusion'] = $conclusion;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }

        after_headBranch:        $result['head_branch'] = $headBranch;

        $headCommit                                     = $object->headCommit;
        $headCommit                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit($headCommit);
        after_headCommit:        $result['head_commit'] = $headCommit;

        $headSha                                  = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $latestCheckRunsCount                                                 = $object->latestCheckRunsCount;
        after_latestCheckRunsCount:        $result['latest_check_runs_count'] = $latestCheckRunsCount;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $pullRequests = $object->pullRequests;
        static $pullRequestsSerializer0;

        if ($pullRequestsSerializer0 === null) {
            $pullRequestsSerializer0 = new SerializeArrayItems(...[]);
        }

        $pullRequests                                       = $pullRequestsSerializer0->serialize($pullRequests, $this);
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }

        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        $runsRerequestable = $object->runsRerequestable;

        if ($runsRerequestable === null) {
            goto after_runsRerequestable;
        }

        after_runsRerequestable:        $result['runs_rerequestable'] = $runsRerequestable;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        assert($object instanceof App);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }

        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new SerializeArrayItems(...[]);
        }

        $events                                = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }

        after_externalUrl:        $result['external_url'] = $externalUrl;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }

        after_clientId:        $result['client_id'] = $clientId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }

        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }

        after_slug:        $result['slug'] = $slug;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Owner(mixed $object): mixed
    {
        assert($object instanceof Owner);
        $result = [];

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }

        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $deleted = $object->deleted;

        if ($deleted === null) {
            goto after_deleted;
        }

        after_deleted:        $result['deleted'] = $deleted;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }

        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }

        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }

        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }

        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }

        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }

        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }

        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }

        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }

        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }

        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }

        after_type:        $result['type'] = $type;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️App⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof Permissions);
        $result = [];

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }

        after_actions:        $result['actions'] = $actions;

        $administration = $object->administration;

        if ($administration === null) {
            goto after_administration;
        }

        after_administration:        $result['administration'] = $administration;

        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }

        after_checks:        $result['checks'] = $checks;

        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }

        after_contentReferences:        $result['content_references'] = $contentReferences;

        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }

        after_contents:        $result['contents'] = $contents;

        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }

        after_deployments:        $result['deployments'] = $deployments;

        $discussions = $object->discussions;

        if ($discussions === null) {
            goto after_discussions;
        }

        after_discussions:        $result['discussions'] = $discussions;

        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }

        after_emails:        $result['emails'] = $emails;

        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }

        after_environments:        $result['environments'] = $environments;

        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }

        after_issues:        $result['issues'] = $issues;

        $keys = $object->keys;

        if ($keys === null) {
            goto after_keys;
        }

        after_keys:        $result['keys'] = $keys;

        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }

        after_members:        $result['members'] = $members;

        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }

        after_metadata:        $result['metadata'] = $metadata;

        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }

        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }

        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }

        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }

        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }

        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }

        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }

        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }

        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }

        after_packages:        $result['packages'] = $packages;

        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }

        after_pages:        $result['pages'] = $pages;

        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }

        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }

        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }

        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }

        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }

        after_secrets:        $result['secrets'] = $secrets;

        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }

        after_securityEvents:        $result['security_events'] = $securityEvents;

        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }

        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }

        after_singleFile:        $result['single_file'] = $singleFile;

        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }

        after_statuses:        $result['statuses'] = $statuses;

        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }

        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }

        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }

        after_workflows:        $result['workflows'] = $workflows;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit(mixed $object): mixed
    {
        assert($object instanceof HeadCommit);
        $result = [];

        $author                                = $object->author;
        $author                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        $committer                                   = $object->committer;
        $committer                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($committer);
        after_committer:        $result['committer'] = $committer;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $timestamp                                   = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        $treeId                                 = $object->treeId;
        after_treeId:        $result['tree_id'] = $treeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(mixed $object): mixed
    {
        assert($object instanceof Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer(mixed $object): mixed
    {
        assert($object instanceof Committer);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks(mixed $object): mixed
    {
        assert($object instanceof EnterpriseWebhooks);
        $result = [];

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $websiteUrl = $object->websiteUrl;

        if ($websiteUrl === null) {
            goto after_websiteUrl;
        }

        after_websiteUrl:        $result['website_url'] = $websiteUrl;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $slug                              = $object->slug;
        after_slug:        $result['slug'] = $slug;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        assert($object instanceof SimpleInstallation);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks(mixed $object): mixed
    {
        assert($object instanceof OrganizationSimpleWebhooks);
        $result = [];

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $hooksUrl                                   = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        $issuesUrl                                    = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $membersUrl                                     = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        $publicMembersUrl                                            = $object->publicMembersUrl;
        after_publicMembersUrl:        $result['public_members_url'] = $publicMembersUrl;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks(mixed $object): mixed
    {
        assert($object instanceof RepositoryWebhooks);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $fullName                                   = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }

        $license                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($license);
        after_license:        $result['license'] = $license;

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($organization);
        after_organization:        $result['organization'] = $organization;

        $forks                               = $object->forks;
        after_forks:        $result['forks'] = $forks;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $owner                               = $object->owner;
        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        $private                                 = $object->private;
        after_private:        $result['private'] = $private;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $fork                              = $object->fork;
        after_fork:        $result['fork'] = $fork;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $archiveUrl                                     = $object->archiveUrl;
        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        $assigneesUrl                                       = $object->assigneesUrl;
        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        $blobsUrl                                   = $object->blobsUrl;
        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        $branchesUrl                                      = $object->branchesUrl;
        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        $collaboratorsUrl                                           = $object->collaboratorsUrl;
        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        $commentsUrl                                      = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        $commitsUrl                                     = $object->commitsUrl;
        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        $compareUrl                                     = $object->compareUrl;
        after_compareUrl:        $result['compare_url'] = $compareUrl;

        $contentsUrl                                      = $object->contentsUrl;
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        $contributorsUrl                                          = $object->contributorsUrl;
        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        $deploymentsUrl                                         = $object->deploymentsUrl;
        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        $downloadsUrl                                       = $object->downloadsUrl;
        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $forksUrl                                   = $object->forksUrl;
        after_forksUrl:        $result['forks_url'] = $forksUrl;

        $gitCommitsUrl                                         = $object->gitCommitsUrl;
        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        $gitRefsUrl                                      = $object->gitRefsUrl;
        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        $gitTagsUrl                                      = $object->gitTagsUrl;
        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        $gitUrl                                 = $object->gitUrl;
        after_gitUrl:        $result['git_url'] = $gitUrl;

        $issueCommentUrl                                           = $object->issueCommentUrl;
        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        $issueEventsUrl                                          = $object->issueEventsUrl;
        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        $issuesUrl                                    = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $keysUrl                                  = $object->keysUrl;
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        $labelsUrl                                    = $object->labelsUrl;
        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        $languagesUrl                                       = $object->languagesUrl;
        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        $mergesUrl                                    = $object->mergesUrl;
        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        $milestonesUrl                                        = $object->milestonesUrl;
        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        $notificationsUrl                                           = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        $pullsUrl                                   = $object->pullsUrl;
        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        $releasesUrl                                      = $object->releasesUrl;
        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        $sshUrl                                 = $object->sshUrl;
        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        $stargazersUrl                                        = $object->stargazersUrl;
        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        $statusesUrl                                      = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        $subscribersUrl                                         = $object->subscribersUrl;
        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        $subscriptionUrl                                          = $object->subscriptionUrl;
        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        $tagsUrl                                  = $object->tagsUrl;
        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        $teamsUrl                                   = $object->teamsUrl;
        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $treesUrl                                   = $object->treesUrl;
        after_treesUrl:        $result['trees_url'] = $treesUrl;

        $cloneUrl                                   = $object->cloneUrl;
        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }

        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        $hooksUrl                                   = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        $svnUrl                                 = $object->svnUrl;
        after_svnUrl:        $result['svn_url'] = $svnUrl;

        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }

        after_homepage:        $result['homepage'] = $homepage;

        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }

        after_language:        $result['language'] = $language;

        $forksCount                                     = $object->forksCount;
        after_forksCount:        $result['forks_count'] = $forksCount;

        $stargazersCount                                          = $object->stargazersCount;
        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        $watchersCount                                        = $object->watchersCount;
        after_watchersCount:        $result['watchers_count'] = $watchersCount;

        $size                              = $object->size;
        after_size:        $result['size'] = $size;

        $defaultBranch                                        = $object->defaultBranch;
        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        $openIssuesCount                                           = $object->openIssuesCount;
        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }

        after_isTemplate:        $result['is_template'] = $isTemplate;

        $topics = $object->topics;

        if ($topics === null) {
            goto after_topics;
        }

        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new SerializeArrayItems(...[]);
        }

        $topics                                = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        $customProperties = $object->customProperties;

        if ($customProperties === null) {
            goto after_customProperties;
        }

        $customProperties                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️CustomProperties($customProperties);
        after_customProperties:        $result['custom_properties'] = $customProperties;

        $hasIssues                                    = $object->hasIssues;
        after_hasIssues:        $result['has_issues'] = $hasIssues;

        $hasProjects                                      = $object->hasProjects;
        after_hasProjects:        $result['has_projects'] = $hasProjects;

        $hasWiki                                  = $object->hasWiki;
        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        $hasPages                                   = $object->hasPages;
        after_hasPages:        $result['has_pages'] = $hasPages;

        $hasDownloads                                       = $object->hasDownloads;
        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        $hasDiscussions = $object->hasDiscussions;

        if ($hasDiscussions === null) {
            goto after_hasDiscussions;
        }

        after_hasDiscussions:        $result['has_discussions'] = $hasDiscussions;

        $archived                                  = $object->archived;
        after_archived:        $result['archived'] = $archived;

        $disabled                                  = $object->disabled;
        after_disabled:        $result['disabled'] = $disabled;

        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }

        after_visibility:        $result['visibility'] = $visibility;

        $pushedAt = $object->pushedAt;

        if ($pushedAt === null) {
            goto after_pushedAt;
        }

        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }

        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        $templateRepository = $object->templateRepository;

        if ($templateRepository === null) {
            goto after_templateRepository;
        }

        $templateRepository                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository($templateRepository);
        after_templateRepository:        $result['template_repository'] = $templateRepository;

        $tempCloneToken = $object->tempCloneToken;

        if ($tempCloneToken === null) {
            goto after_tempCloneToken;
        }

        after_tempCloneToken:        $result['temp_clone_token'] = $tempCloneToken;

        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }

        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }

        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }

        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }

        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        $useSquashPrTitleAsDefault = $object->useSquashPrTitleAsDefault;

        if ($useSquashPrTitleAsDefault === null) {
            goto after_useSquashPrTitleAsDefault;
        }

        after_useSquashPrTitleAsDefault:        $result['use_squash_pr_title_as_default'] = $useSquashPrTitleAsDefault;

        $squashMergeCommitTitle = $object->squashMergeCommitTitle;

        if ($squashMergeCommitTitle === null) {
            goto after_squashMergeCommitTitle;
        }

        after_squashMergeCommitTitle:        $result['squash_merge_commit_title'] = $squashMergeCommitTitle;

        $squashMergeCommitMessage = $object->squashMergeCommitMessage;

        if ($squashMergeCommitMessage === null) {
            goto after_squashMergeCommitMessage;
        }

        after_squashMergeCommitMessage:        $result['squash_merge_commit_message'] = $squashMergeCommitMessage;

        $mergeCommitTitle = $object->mergeCommitTitle;

        if ($mergeCommitTitle === null) {
            goto after_mergeCommitTitle;
        }

        after_mergeCommitTitle:        $result['merge_commit_title'] = $mergeCommitTitle;

        $mergeCommitMessage = $object->mergeCommitMessage;

        if ($mergeCommitMessage === null) {
            goto after_mergeCommitMessage;
        }

        after_mergeCommitMessage:        $result['merge_commit_message'] = $mergeCommitMessage;

        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }

        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        $allowForking = $object->allowForking;

        if ($allowForking === null) {
            goto after_allowForking;
        }

        after_allowForking:        $result['allow_forking'] = $allowForking;

        $webCommitSignoffRequired = $object->webCommitSignoffRequired;

        if ($webCommitSignoffRequired === null) {
            goto after_webCommitSignoffRequired;
        }

        after_webCommitSignoffRequired:        $result['web_commit_signoff_required'] = $webCommitSignoffRequired;

        $subscribersCount = $object->subscribersCount;

        if ($subscribersCount === null) {
            goto after_subscribersCount;
        }

        after_subscribersCount:        $result['subscribers_count'] = $subscribersCount;

        $networkCount = $object->networkCount;

        if ($networkCount === null) {
            goto after_networkCount;
        }

        after_networkCount:        $result['network_count'] = $networkCount;

        $openIssues                                     = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        $watchers                                  = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        $masterBranch = $object->masterBranch;

        if ($masterBranch === null) {
            goto after_masterBranch;
        }

        after_masterBranch:        $result['master_branch'] = $masterBranch;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        $anonymousAccessEnabled = $object->anonymousAccessEnabled;

        if ($anonymousAccessEnabled === null) {
            goto after_anonymousAccessEnabled;
        }

        after_anonymousAccessEnabled:        $result['anonymous_access_enabled'] = $anonymousAccessEnabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(mixed $object): mixed
    {
        assert($object instanceof LicenseSimple);
        $result = [];

        $key                             = $object->key;
        after_key:        $result['key'] = $key;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $spdxId = $object->spdxId;

        if ($spdxId === null) {
            goto after_spdxId;
        }

        after_spdxId:        $result['spdx_id'] = $spdxId;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        assert($object instanceof SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl                                    = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl                                           = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl                                           = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl                                   = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl                                             = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $siteAdmin                                    = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }

        after_starredAt:        $result['starred_at'] = $starredAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions);
        $result = [];

        $admin                               = $object->admin;
        after_admin:        $result['admin'] = $admin;

        $pull                              = $object->pull;
        after_pull:        $result['pull'] = $pull;

        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }

        after_triage:        $result['triage'] = $triage;

        $push                              = $object->push;
        after_push:        $result['push'] = $push;

        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }

        after_maintain:        $result['maintain'] = $maintain;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository(mixed $object): mixed
    {
        assert($object instanceof TemplateRepository);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $fullName = $object->fullName;

        if ($fullName === null) {
            goto after_fullName;
        }

        after_fullName:        $result['full_name'] = $fullName;

        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }

        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        $private = $object->private;

        if ($private === null) {
            goto after_private;
        }

        after_private:        $result['private'] = $private;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $fork = $object->fork;

        if ($fork === null) {
            goto after_fork;
        }

        after_fork:        $result['fork'] = $fork;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $archiveUrl = $object->archiveUrl;

        if ($archiveUrl === null) {
            goto after_archiveUrl;
        }

        after_archiveUrl:        $result['archive_url'] = $archiveUrl;

        $assigneesUrl = $object->assigneesUrl;

        if ($assigneesUrl === null) {
            goto after_assigneesUrl;
        }

        after_assigneesUrl:        $result['assignees_url'] = $assigneesUrl;

        $blobsUrl = $object->blobsUrl;

        if ($blobsUrl === null) {
            goto after_blobsUrl;
        }

        after_blobsUrl:        $result['blobs_url'] = $blobsUrl;

        $branchesUrl = $object->branchesUrl;

        if ($branchesUrl === null) {
            goto after_branchesUrl;
        }

        after_branchesUrl:        $result['branches_url'] = $branchesUrl;

        $collaboratorsUrl = $object->collaboratorsUrl;

        if ($collaboratorsUrl === null) {
            goto after_collaboratorsUrl;
        }

        after_collaboratorsUrl:        $result['collaborators_url'] = $collaboratorsUrl;

        $commentsUrl = $object->commentsUrl;

        if ($commentsUrl === null) {
            goto after_commentsUrl;
        }

        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        $commitsUrl = $object->commitsUrl;

        if ($commitsUrl === null) {
            goto after_commitsUrl;
        }

        after_commitsUrl:        $result['commits_url'] = $commitsUrl;

        $compareUrl = $object->compareUrl;

        if ($compareUrl === null) {
            goto after_compareUrl;
        }

        after_compareUrl:        $result['compare_url'] = $compareUrl;

        $contentsUrl = $object->contentsUrl;

        if ($contentsUrl === null) {
            goto after_contentsUrl;
        }

        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        $contributorsUrl = $object->contributorsUrl;

        if ($contributorsUrl === null) {
            goto after_contributorsUrl;
        }

        after_contributorsUrl:        $result['contributors_url'] = $contributorsUrl;

        $deploymentsUrl = $object->deploymentsUrl;

        if ($deploymentsUrl === null) {
            goto after_deploymentsUrl;
        }

        after_deploymentsUrl:        $result['deployments_url'] = $deploymentsUrl;

        $downloadsUrl = $object->downloadsUrl;

        if ($downloadsUrl === null) {
            goto after_downloadsUrl;
        }

        after_downloadsUrl:        $result['downloads_url'] = $downloadsUrl;

        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }

        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $forksUrl = $object->forksUrl;

        if ($forksUrl === null) {
            goto after_forksUrl;
        }

        after_forksUrl:        $result['forks_url'] = $forksUrl;

        $gitCommitsUrl = $object->gitCommitsUrl;

        if ($gitCommitsUrl === null) {
            goto after_gitCommitsUrl;
        }

        after_gitCommitsUrl:        $result['git_commits_url'] = $gitCommitsUrl;

        $gitRefsUrl = $object->gitRefsUrl;

        if ($gitRefsUrl === null) {
            goto after_gitRefsUrl;
        }

        after_gitRefsUrl:        $result['git_refs_url'] = $gitRefsUrl;

        $gitTagsUrl = $object->gitTagsUrl;

        if ($gitTagsUrl === null) {
            goto after_gitTagsUrl;
        }

        after_gitTagsUrl:        $result['git_tags_url'] = $gitTagsUrl;

        $gitUrl = $object->gitUrl;

        if ($gitUrl === null) {
            goto after_gitUrl;
        }

        after_gitUrl:        $result['git_url'] = $gitUrl;

        $issueCommentUrl = $object->issueCommentUrl;

        if ($issueCommentUrl === null) {
            goto after_issueCommentUrl;
        }

        after_issueCommentUrl:        $result['issue_comment_url'] = $issueCommentUrl;

        $issueEventsUrl = $object->issueEventsUrl;

        if ($issueEventsUrl === null) {
            goto after_issueEventsUrl;
        }

        after_issueEventsUrl:        $result['issue_events_url'] = $issueEventsUrl;

        $issuesUrl = $object->issuesUrl;

        if ($issuesUrl === null) {
            goto after_issuesUrl;
        }

        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $keysUrl = $object->keysUrl;

        if ($keysUrl === null) {
            goto after_keysUrl;
        }

        after_keysUrl:        $result['keys_url'] = $keysUrl;

        $labelsUrl = $object->labelsUrl;

        if ($labelsUrl === null) {
            goto after_labelsUrl;
        }

        after_labelsUrl:        $result['labels_url'] = $labelsUrl;

        $languagesUrl = $object->languagesUrl;

        if ($languagesUrl === null) {
            goto after_languagesUrl;
        }

        after_languagesUrl:        $result['languages_url'] = $languagesUrl;

        $mergesUrl = $object->mergesUrl;

        if ($mergesUrl === null) {
            goto after_mergesUrl;
        }

        after_mergesUrl:        $result['merges_url'] = $mergesUrl;

        $milestonesUrl = $object->milestonesUrl;

        if ($milestonesUrl === null) {
            goto after_milestonesUrl;
        }

        after_milestonesUrl:        $result['milestones_url'] = $milestonesUrl;

        $notificationsUrl = $object->notificationsUrl;

        if ($notificationsUrl === null) {
            goto after_notificationsUrl;
        }

        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        $pullsUrl = $object->pullsUrl;

        if ($pullsUrl === null) {
            goto after_pullsUrl;
        }

        after_pullsUrl:        $result['pulls_url'] = $pullsUrl;

        $releasesUrl = $object->releasesUrl;

        if ($releasesUrl === null) {
            goto after_releasesUrl;
        }

        after_releasesUrl:        $result['releases_url'] = $releasesUrl;

        $sshUrl = $object->sshUrl;

        if ($sshUrl === null) {
            goto after_sshUrl;
        }

        after_sshUrl:        $result['ssh_url'] = $sshUrl;

        $stargazersUrl = $object->stargazersUrl;

        if ($stargazersUrl === null) {
            goto after_stargazersUrl;
        }

        after_stargazersUrl:        $result['stargazers_url'] = $stargazersUrl;

        $statusesUrl = $object->statusesUrl;

        if ($statusesUrl === null) {
            goto after_statusesUrl;
        }

        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        $subscribersUrl = $object->subscribersUrl;

        if ($subscribersUrl === null) {
            goto after_subscribersUrl;
        }

        after_subscribersUrl:        $result['subscribers_url'] = $subscribersUrl;

        $subscriptionUrl = $object->subscriptionUrl;

        if ($subscriptionUrl === null) {
            goto after_subscriptionUrl;
        }

        after_subscriptionUrl:        $result['subscription_url'] = $subscriptionUrl;

        $tagsUrl = $object->tagsUrl;

        if ($tagsUrl === null) {
            goto after_tagsUrl;
        }

        after_tagsUrl:        $result['tags_url'] = $tagsUrl;

        $teamsUrl = $object->teamsUrl;

        if ($teamsUrl === null) {
            goto after_teamsUrl;
        }

        after_teamsUrl:        $result['teams_url'] = $teamsUrl;

        $treesUrl = $object->treesUrl;

        if ($treesUrl === null) {
            goto after_treesUrl;
        }

        after_treesUrl:        $result['trees_url'] = $treesUrl;

        $cloneUrl = $object->cloneUrl;

        if ($cloneUrl === null) {
            goto after_cloneUrl;
        }

        after_cloneUrl:        $result['clone_url'] = $cloneUrl;

        $mirrorUrl = $object->mirrorUrl;

        if ($mirrorUrl === null) {
            goto after_mirrorUrl;
        }

        after_mirrorUrl:        $result['mirror_url'] = $mirrorUrl;

        $hooksUrl = $object->hooksUrl;

        if ($hooksUrl === null) {
            goto after_hooksUrl;
        }

        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        $svnUrl = $object->svnUrl;

        if ($svnUrl === null) {
            goto after_svnUrl;
        }

        after_svnUrl:        $result['svn_url'] = $svnUrl;

        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }

        after_homepage:        $result['homepage'] = $homepage;

        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }

        after_language:        $result['language'] = $language;

        $forksCount = $object->forksCount;

        if ($forksCount === null) {
            goto after_forksCount;
        }

        after_forksCount:        $result['forks_count'] = $forksCount;

        $stargazersCount = $object->stargazersCount;

        if ($stargazersCount === null) {
            goto after_stargazersCount;
        }

        after_stargazersCount:        $result['stargazers_count'] = $stargazersCount;

        $watchersCount = $object->watchersCount;

        if ($watchersCount === null) {
            goto after_watchersCount;
        }

        after_watchersCount:        $result['watchers_count'] = $watchersCount;

        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }

        after_size:        $result['size'] = $size;

        $defaultBranch = $object->defaultBranch;

        if ($defaultBranch === null) {
            goto after_defaultBranch;
        }

        after_defaultBranch:        $result['default_branch'] = $defaultBranch;

        $openIssuesCount = $object->openIssuesCount;

        if ($openIssuesCount === null) {
            goto after_openIssuesCount;
        }

        after_openIssuesCount:        $result['open_issues_count'] = $openIssuesCount;

        $isTemplate = $object->isTemplate;

        if ($isTemplate === null) {
            goto after_isTemplate;
        }

        after_isTemplate:        $result['is_template'] = $isTemplate;

        $topics = $object->topics;

        if ($topics === null) {
            goto after_topics;
        }

        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new SerializeArrayItems(...[]);
        }

        $topics                                = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        $hasIssues = $object->hasIssues;

        if ($hasIssues === null) {
            goto after_hasIssues;
        }

        after_hasIssues:        $result['has_issues'] = $hasIssues;

        $hasProjects = $object->hasProjects;

        if ($hasProjects === null) {
            goto after_hasProjects;
        }

        after_hasProjects:        $result['has_projects'] = $hasProjects;

        $hasWiki = $object->hasWiki;

        if ($hasWiki === null) {
            goto after_hasWiki;
        }

        after_hasWiki:        $result['has_wiki'] = $hasWiki;

        $hasPages = $object->hasPages;

        if ($hasPages === null) {
            goto after_hasPages;
        }

        after_hasPages:        $result['has_pages'] = $hasPages;

        $hasDownloads = $object->hasDownloads;

        if ($hasDownloads === null) {
            goto after_hasDownloads;
        }

        after_hasDownloads:        $result['has_downloads'] = $hasDownloads;

        $archived = $object->archived;

        if ($archived === null) {
            goto after_archived;
        }

        after_archived:        $result['archived'] = $archived;

        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }

        after_disabled:        $result['disabled'] = $disabled;

        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }

        after_visibility:        $result['visibility'] = $visibility;

        $pushedAt = $object->pushedAt;

        if ($pushedAt === null) {
            goto after_pushedAt;
        }

        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $allowRebaseMerge = $object->allowRebaseMerge;

        if ($allowRebaseMerge === null) {
            goto after_allowRebaseMerge;
        }

        after_allowRebaseMerge:        $result['allow_rebase_merge'] = $allowRebaseMerge;

        $tempCloneToken = $object->tempCloneToken;

        if ($tempCloneToken === null) {
            goto after_tempCloneToken;
        }

        after_tempCloneToken:        $result['temp_clone_token'] = $tempCloneToken;

        $allowSquashMerge = $object->allowSquashMerge;

        if ($allowSquashMerge === null) {
            goto after_allowSquashMerge;
        }

        after_allowSquashMerge:        $result['allow_squash_merge'] = $allowSquashMerge;

        $allowAutoMerge = $object->allowAutoMerge;

        if ($allowAutoMerge === null) {
            goto after_allowAutoMerge;
        }

        after_allowAutoMerge:        $result['allow_auto_merge'] = $allowAutoMerge;

        $deleteBranchOnMerge = $object->deleteBranchOnMerge;

        if ($deleteBranchOnMerge === null) {
            goto after_deleteBranchOnMerge;
        }

        after_deleteBranchOnMerge:        $result['delete_branch_on_merge'] = $deleteBranchOnMerge;

        $allowUpdateBranch = $object->allowUpdateBranch;

        if ($allowUpdateBranch === null) {
            goto after_allowUpdateBranch;
        }

        after_allowUpdateBranch:        $result['allow_update_branch'] = $allowUpdateBranch;

        $useSquashPrTitleAsDefault = $object->useSquashPrTitleAsDefault;

        if ($useSquashPrTitleAsDefault === null) {
            goto after_useSquashPrTitleAsDefault;
        }

        after_useSquashPrTitleAsDefault:        $result['use_squash_pr_title_as_default'] = $useSquashPrTitleAsDefault;

        $squashMergeCommitTitle = $object->squashMergeCommitTitle;

        if ($squashMergeCommitTitle === null) {
            goto after_squashMergeCommitTitle;
        }

        after_squashMergeCommitTitle:        $result['squash_merge_commit_title'] = $squashMergeCommitTitle;

        $squashMergeCommitMessage = $object->squashMergeCommitMessage;

        if ($squashMergeCommitMessage === null) {
            goto after_squashMergeCommitMessage;
        }

        after_squashMergeCommitMessage:        $result['squash_merge_commit_message'] = $squashMergeCommitMessage;

        $mergeCommitTitle = $object->mergeCommitTitle;

        if ($mergeCommitTitle === null) {
            goto after_mergeCommitTitle;
        }

        after_mergeCommitTitle:        $result['merge_commit_title'] = $mergeCommitTitle;

        $mergeCommitMessage = $object->mergeCommitMessage;

        if ($mergeCommitMessage === null) {
            goto after_mergeCommitMessage;
        }

        after_mergeCommitMessage:        $result['merge_commit_message'] = $mergeCommitMessage;

        $allowMergeCommit = $object->allowMergeCommit;

        if ($allowMergeCommit === null) {
            goto after_allowMergeCommit;
        }

        after_allowMergeCommit:        $result['allow_merge_commit'] = $allowMergeCommit;

        $subscribersCount = $object->subscribersCount;

        if ($subscribersCount === null) {
            goto after_subscribersCount;
        }

        after_subscribersCount:        $result['subscribers_count'] = $subscribersCount;

        $networkCount = $object->networkCount;

        if ($networkCount === null) {
            goto after_networkCount;
        }

        after_networkCount:        $result['network_count'] = $networkCount;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Owner(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner);
        $result = [];

        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }

        after_login:        $result['login'] = $login;

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }

        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }

        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }

        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }

        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }

        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }

        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }

        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }

        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }

        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }

        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }

        after_type:        $result['type'] = $type;

        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }

        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks⚡️TemplateRepository⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions);
        $result = [];

        $admin = $object->admin;

        if ($admin === null) {
            goto after_admin;
        }

        after_admin:        $result['admin'] = $admin;

        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }

        after_maintain:        $result['maintain'] = $maintain;

        $push = $object->push;

        if ($push === null) {
            goto after_push;
        }

        after_push:        $result['push'] = $push;

        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }

        after_triage:        $result['triage'] = $triage;

        $pull = $object->pull;

        if ($pull === null) {
            goto after_pull;
        }

        after_pull:        $result['pull'] = $pull;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested(mixed $object): mixed
    {
        assert($object instanceof WebhookCheckSuiteRequested);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $checkSuite                                     = $object->checkSuite;
        $checkSuite                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite($checkSuite);
        after_checkSuite:        $result['check_suite'] = $checkSuite;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $repository                                    = $object->repository;
        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($repository);
        after_repository:        $result['repository'] = $repository;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }

        after_after:        $result['after'] = $after;

        $app                             = $object->app;
        $app                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }

        after_before:        $result['before'] = $before;

        $checkRunsUrl                                        = $object->checkRunsUrl;
        after_checkRunsUrl:        $result['check_runs_url'] = $checkRunsUrl;

        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }

        after_conclusion:        $result['conclusion'] = $conclusion;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }

        after_headBranch:        $result['head_branch'] = $headBranch;

        $headCommit                                     = $object->headCommit;
        $headCommit                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit($headCommit);
        after_headCommit:        $result['head_commit'] = $headCommit;

        $headSha                                  = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $latestCheckRunsCount                                                 = $object->latestCheckRunsCount;
        after_latestCheckRunsCount:        $result['latest_check_runs_count'] = $latestCheckRunsCount;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $pullRequests = $object->pullRequests;
        static $pullRequestsSerializer0;

        if ($pullRequestsSerializer0 === null) {
            $pullRequestsSerializer0 = new SerializeArrayItems(...[]);
        }

        $pullRequests                                       = $pullRequestsSerializer0->serialize($pullRequests, $this);
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }

        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        $runsRerequestable = $object->runsRerequestable;

        if ($runsRerequestable === null) {
            goto after_runsRerequestable;
        }

        after_runsRerequestable:        $result['runs_rerequestable'] = $runsRerequestable;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }

        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new SerializeArrayItems(...[]);
        }

        $events                                = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }

        after_externalUrl:        $result['external_url'] = $externalUrl;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }

        after_clientId:        $result['client_id'] = $clientId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }

        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }

        after_slug:        $result['slug'] = $slug;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Owner(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Owner);
        $result = [];

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }

        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $deleted = $object->deleted;

        if ($deleted === null) {
            goto after_deleted;
        }

        after_deleted:        $result['deleted'] = $deleted;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }

        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }

        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }

        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }

        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }

        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }

        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }

        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }

        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }

        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }

        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }

        after_type:        $result['type'] = $type;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️App⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App\Permissions);
        $result = [];

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }

        after_actions:        $result['actions'] = $actions;

        $administration = $object->administration;

        if ($administration === null) {
            goto after_administration;
        }

        after_administration:        $result['administration'] = $administration;

        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }

        after_checks:        $result['checks'] = $checks;

        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }

        after_contentReferences:        $result['content_references'] = $contentReferences;

        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }

        after_contents:        $result['contents'] = $contents;

        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }

        after_deployments:        $result['deployments'] = $deployments;

        $discussions = $object->discussions;

        if ($discussions === null) {
            goto after_discussions;
        }

        after_discussions:        $result['discussions'] = $discussions;

        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }

        after_emails:        $result['emails'] = $emails;

        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }

        after_environments:        $result['environments'] = $environments;

        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }

        after_issues:        $result['issues'] = $issues;

        $keys = $object->keys;

        if ($keys === null) {
            goto after_keys;
        }

        after_keys:        $result['keys'] = $keys;

        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }

        after_members:        $result['members'] = $members;

        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }

        after_metadata:        $result['metadata'] = $metadata;

        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }

        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }

        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }

        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }

        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }

        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }

        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }

        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }

        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }

        after_packages:        $result['packages'] = $packages;

        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }

        after_pages:        $result['pages'] = $pages;

        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }

        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }

        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }

        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }

        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }

        after_secrets:        $result['secrets'] = $secrets;

        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }

        after_securityEvents:        $result['security_events'] = $securityEvents;

        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }

        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }

        after_singleFile:        $result['single_file'] = $singleFile;

        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }

        after_statuses:        $result['statuses'] = $statuses;

        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }

        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }

        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }

        after_workflows:        $result['workflows'] = $workflows;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit);
        $result = [];

        $author                                = $object->author;
        $author                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        $committer                                   = $object->committer;
        $committer                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($committer);
        after_committer:        $result['committer'] = $committer;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $timestamp                                   = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        $treeId                                 = $object->treeId;
        after_treeId:        $result['tree_id'] = $treeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Author(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRequested⚡️CheckSuite⚡️HeadCommit⚡️Committer(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit\Committer);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested(mixed $object): mixed
    {
        assert($object instanceof WebhookCheckSuiteRerequested);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $checkSuite                                     = $object->checkSuite;
        $checkSuite                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite($checkSuite);
        after_checkSuite:        $result['check_suite'] = $checkSuite;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $repository                                    = $object->repository;
        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryWebhooks($repository);
        after_repository:        $result['repository'] = $repository;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite);
        $result = [];

        $after = $object->after;

        if ($after === null) {
            goto after_after;
        }

        after_after:        $result['after'] = $after;

        $app                             = $object->app;
        $app                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App($app);
        after_app:        $result['app'] = $app;

        $before = $object->before;

        if ($before === null) {
            goto after_before;
        }

        after_before:        $result['before'] = $before;

        $checkRunsUrl                                        = $object->checkRunsUrl;
        after_checkRunsUrl:        $result['check_runs_url'] = $checkRunsUrl;

        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }

        after_conclusion:        $result['conclusion'] = $conclusion;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $headBranch = $object->headBranch;

        if ($headBranch === null) {
            goto after_headBranch;
        }

        after_headBranch:        $result['head_branch'] = $headBranch;

        $headCommit                                     = $object->headCommit;
        $headCommit                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit($headCommit);
        after_headCommit:        $result['head_commit'] = $headCommit;

        $headSha                                  = $object->headSha;
        after_headSha:        $result['head_sha'] = $headSha;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $latestCheckRunsCount                                                 = $object->latestCheckRunsCount;
        after_latestCheckRunsCount:        $result['latest_check_runs_count'] = $latestCheckRunsCount;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $pullRequests = $object->pullRequests;
        static $pullRequestsSerializer0;

        if ($pullRequestsSerializer0 === null) {
            $pullRequestsSerializer0 = new SerializeArrayItems(...[]);
        }

        $pullRequests                                       = $pullRequestsSerializer0->serialize($pullRequests, $this);
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $rerequestable = $object->rerequestable;

        if ($rerequestable === null) {
            goto after_rerequestable;
        }

        after_rerequestable:        $result['rerequestable'] = $rerequestable;

        $runsRerequestable = $object->runsRerequestable;

        if ($runsRerequestable === null) {
            goto after_runsRerequestable;
        }

        after_runsRerequestable:        $result['runs_rerequestable'] = $runsRerequestable;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App);
        $result = [];

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }

        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new SerializeArrayItems(...[]);
        }

        $events                                = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        $externalUrl = $object->externalUrl;

        if ($externalUrl === null) {
            goto after_externalUrl;
        }

        after_externalUrl:        $result['external_url'] = $externalUrl;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }

        after_clientId:        $result['client_id'] = $clientId;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }

        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner($owner);
        after_owner:        $result['owner'] = $owner;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $slug = $object->slug;

        if ($slug === null) {
            goto after_slug;
        }

        after_slug:        $result['slug'] = $slug;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Owner(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner);
        $result = [];

        $avatarUrl = $object->avatarUrl;

        if ($avatarUrl === null) {
            goto after_avatarUrl;
        }

        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        $deleted = $object->deleted;

        if ($deleted === null) {
            goto after_deleted;
        }

        after_deleted:        $result['deleted'] = $deleted;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $eventsUrl = $object->eventsUrl;

        if ($eventsUrl === null) {
            goto after_eventsUrl;
        }

        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $followersUrl = $object->followersUrl;

        if ($followersUrl === null) {
            goto after_followersUrl;
        }

        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl = $object->followingUrl;

        if ($followingUrl === null) {
            goto after_followingUrl;
        }

        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl = $object->gistsUrl;

        if ($gistsUrl === null) {
            goto after_gistsUrl;
        }

        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }

        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $organizationsUrl = $object->organizationsUrl;

        if ($organizationsUrl === null) {
            goto after_organizationsUrl;
        }

        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        $receivedEventsUrl = $object->receivedEventsUrl;

        if ($receivedEventsUrl === null) {
            goto after_receivedEventsUrl;
        }

        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        $reposUrl = $object->reposUrl;

        if ($reposUrl === null) {
            goto after_reposUrl;
        }

        after_reposUrl:        $result['repos_url'] = $reposUrl;

        $siteAdmin = $object->siteAdmin;

        if ($siteAdmin === null) {
            goto after_siteAdmin;
        }

        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        $starredUrl = $object->starredUrl;

        if ($starredUrl === null) {
            goto after_starredUrl;
        }

        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $subscriptionsUrl = $object->subscriptionsUrl;

        if ($subscriptionsUrl === null) {
            goto after_subscriptionsUrl;
        }

        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }

        after_type:        $result['type'] = $type;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️App⚡️Permissions(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions);
        $result = [];

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }

        after_actions:        $result['actions'] = $actions;

        $administration = $object->administration;

        if ($administration === null) {
            goto after_administration;
        }

        after_administration:        $result['administration'] = $administration;

        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }

        after_checks:        $result['checks'] = $checks;

        $contentReferences = $object->contentReferences;

        if ($contentReferences === null) {
            goto after_contentReferences;
        }

        after_contentReferences:        $result['content_references'] = $contentReferences;

        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }

        after_contents:        $result['contents'] = $contents;

        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }

        after_deployments:        $result['deployments'] = $deployments;

        $discussions = $object->discussions;

        if ($discussions === null) {
            goto after_discussions;
        }

        after_discussions:        $result['discussions'] = $discussions;

        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }

        after_emails:        $result['emails'] = $emails;

        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }

        after_environments:        $result['environments'] = $environments;

        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }

        after_issues:        $result['issues'] = $issues;

        $keys = $object->keys;

        if ($keys === null) {
            goto after_keys;
        }

        after_keys:        $result['keys'] = $keys;

        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }

        after_members:        $result['members'] = $members;

        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }

        after_metadata:        $result['metadata'] = $metadata;

        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }

        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }

        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }

        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }

        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }

        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }

        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }

        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }

        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }

        after_packages:        $result['packages'] = $packages;

        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }

        after_pages:        $result['pages'] = $pages;

        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }

        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }

        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }

        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }

        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }

        after_secrets:        $result['secrets'] = $secrets;

        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }

        after_securityEvents:        $result['security_events'] = $securityEvents;

        $securityScanningAlert = $object->securityScanningAlert;

        if ($securityScanningAlert === null) {
            goto after_securityScanningAlert;
        }

        after_securityScanningAlert:        $result['security_scanning_alert'] = $securityScanningAlert;

        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }

        after_singleFile:        $result['single_file'] = $singleFile;

        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }

        after_statuses:        $result['statuses'] = $statuses;

        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }

        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;

        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }

        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }

        after_workflows:        $result['workflows'] = $workflows;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit);
        $result = [];

        $author                                = $object->author;
        $author                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        $committer                                   = $object->committer;
        $committer                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Committer($committer);
        after_committer:        $result['committer'] = $committer;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $timestamp                                   = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        $treeId                                 = $object->treeId;
        after_treeId:        $result['tree_id'] = $treeId;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Author(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteRerequested⚡️CheckSuite⚡️HeadCommit⚡️Committer(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit\Committer);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
