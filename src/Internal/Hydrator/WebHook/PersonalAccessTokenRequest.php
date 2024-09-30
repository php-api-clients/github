<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\WebHook;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestApproved;
use ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCancelled;
use ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCreated;
use ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestDenied;
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

class PersonalAccessTokenRequest implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestApproved' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($payload),
                'ApiClients\Client\GitHub\Schema\EnterpriseWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCancelled' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCreated' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestDenied' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Organization($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Other($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Organization($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Other($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Organization($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Repository($payload),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Other($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved(array $payload): WebhookPersonalAccessTokenRequestApproved
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

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

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

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
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

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestApproved', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookPersonalAccessTokenRequestApproved::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookPersonalAccessTokenRequestApproved(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestApproved', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest
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

            $value = $payload['permissions_added'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_added';
                goto after_permissionsAdded;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsAdded';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsAdded'] = $value;

            after_permissionsAdded:

            $value = $payload['permissions_upgraded'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_upgraded';
                goto after_permissionsUpgraded;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsUpgraded';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsUpgraded'] = $value;

            after_permissionsUpgraded:

            $value = $payload['permissions_result'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_result';
                goto after_permissionsResult;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsResult';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsResult'] = $value;

            after_permissionsResult:

            $value = $payload['repository_selection'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_selection';
                goto after_repositorySelection;
            }

            $properties['repositorySelection'] = $value;

            after_repositorySelection:

            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $properties['repositoryCount'] = null;
                goto after_repositoryCount;
            }

            $properties['repositoryCount'] = $value;

            after_repositoryCount:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $properties['repositories'] = null;
                goto after_repositories;
            }

            $properties['repositories'] = $value;

            after_repositories:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['token_expired'] ?? null;

            if ($value === null) {
                $missingFields[] = 'token_expired';
                goto after_tokenExpired;
            }

            $properties['tokenExpired'] = $value;

            after_tokenExpired:

            $value = $payload['token_expires_at'] ?? null;

            if ($value === null) {
                $properties['tokenExpiresAt'] = null;
                goto after_tokenExpiresAt;
            }

            $properties['tokenExpiresAt'] = $value;

            after_tokenExpiresAt:

            $value = $payload['token_last_used_at'] ?? null;

            if ($value === null) {
                $properties['tokenLastUsedAt'] = null;
                goto after_tokenLastUsedAt;
            }

            $properties['tokenLastUsedAt'] = $value;

            after_tokenLastUsedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded(array $payload): PermissionsAdded
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Organization($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'other';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Other($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['other'] = $value;

            after_other:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PermissionsAdded::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PermissionsAdded(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded(array $payload): PermissionsUpgraded
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Organization($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'other';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Other($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['other'] = $value;

            after_other:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PermissionsUpgraded::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PermissionsUpgraded(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult(array $payload): PermissionsResult
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Organization($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Repository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'other';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Other($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['other'] = $value;

            after_other:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PermissionsResult::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PermissionsResult(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled(array $payload): WebhookPersonalAccessTokenRequestCancelled
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

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

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

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
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

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCancelled', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookPersonalAccessTokenRequestCancelled::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookPersonalAccessTokenRequestCancelled(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCancelled', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated(array $payload): WebhookPersonalAccessTokenRequestCreated
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

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

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

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCreated', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookPersonalAccessTokenRequestCreated::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookPersonalAccessTokenRequestCreated(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCreated', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied(array $payload): WebhookPersonalAccessTokenRequestDenied
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

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
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

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestDenied', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WebhookPersonalAccessTokenRequestDenied::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WebhookPersonalAccessTokenRequestDenied(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestDenied', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Organization(array $payload): Organization
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Organization::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Organization(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Repository(array $payload): Repository
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Repository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Repository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Other(array $payload): Other
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Other::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Other(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Organization(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Repository(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Other(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Organization(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Repository(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Other(array $payload): \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestApproved' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved($object),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($object),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($object),
                'ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($object),
                'ApiClients\Client\GitHub\Schema\EnterpriseWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($object),
                'ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($object),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCancelled' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled($object),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestCreated' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated($object),
                'ApiClients\Client\GitHub\Schema\WebhookPersonalAccessTokenRequestDenied' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved(mixed $object): mixed
    {
        assert($object instanceof WebhookPersonalAccessTokenRequestApproved);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $personalAccessTokenRequest                                                       = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        $installation                                      = $object->installation;
        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $owner                               = $object->owner;
        $owner                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        $permissionsAdded                                           = $object->permissionsAdded;
        $permissionsAdded                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($permissionsAdded);
        after_permissionsAdded:        $result['permissions_added'] = $permissionsAdded;

        $permissionsUpgraded                                              = $object->permissionsUpgraded;
        $permissionsUpgraded                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($permissionsUpgraded);
        after_permissionsUpgraded:        $result['permissions_upgraded'] = $permissionsUpgraded;

        $permissionsResult                                            = $object->permissionsResult;
        $permissionsResult                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($permissionsResult);
        after_permissionsResult:        $result['permissions_result'] = $permissionsResult;

        $repositorySelection                                              = $object->repositorySelection;
        after_repositorySelection:        $result['repository_selection'] = $repositorySelection;

        $repositoryCount = $object->repositoryCount;

        if ($repositoryCount === null) {
            goto after_repositoryCount;
        }

        after_repositoryCount:        $result['repository_count'] = $repositoryCount;

        $repositories = $object->repositories;

        if ($repositories === null) {
            goto after_repositories;
        }

        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositories                                      = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $tokenExpired                                       = $object->tokenExpired;
        after_tokenExpired:        $result['token_expired'] = $tokenExpired;

        $tokenExpiresAt = $object->tokenExpiresAt;

        if ($tokenExpiresAt === null) {
            goto after_tokenExpiresAt;
        }

        after_tokenExpiresAt:        $result['token_expires_at'] = $tokenExpiresAt;

        $tokenLastUsedAt = $object->tokenLastUsedAt;

        if ($tokenLastUsedAt === null) {
            goto after_tokenLastUsedAt;
        }

        after_tokenLastUsedAt:        $result['token_last_used_at'] = $tokenLastUsedAt;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded(mixed $object): mixed
    {
        assert($object instanceof PermissionsAdded);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Organization($organization);
        after_organization:        $result['organization'] = $organization;

        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }

        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }

        $other                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded⚡️Other($other);
        after_other:        $result['other'] = $other;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded(mixed $object): mixed
    {
        assert($object instanceof PermissionsUpgraded);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Organization($organization);
        after_organization:        $result['organization'] = $organization;

        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }

        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }

        $other                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded⚡️Other($other);
        after_other:        $result['other'] = $other;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult(mixed $object): mixed
    {
        assert($object instanceof PermissionsResult);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }

        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Organization($organization);
        after_organization:        $result['organization'] = $organization;

        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }

        $repository                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Repository($repository);
        after_repository:        $result['repository'] = $repository;

        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }

        $other                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult⚡️Other($other);
        after_other:        $result['other'] = $other;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled(mixed $object): mixed
    {
        assert($object instanceof WebhookPersonalAccessTokenRequestCancelled);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $personalAccessTokenRequest                                                       = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        $installation                                      = $object->installation;
        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated(mixed $object): mixed
    {
        assert($object instanceof WebhookPersonalAccessTokenRequestCreated);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $personalAccessTokenRequest                                                       = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }

        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied(mixed $object): mixed
    {
        assert($object instanceof WebhookPersonalAccessTokenRequestDenied);
        $result = [];

        $action                                = $object->action;
        after_action:        $result['action'] = $action;

        $personalAccessTokenRequest                                                       = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest                                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        $organization                                      = $object->organization;
        $organization                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimpleWebhooks($organization);
        after_organization:        $result['organization'] = $organization;

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }

        $enterprise                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EnterpriseWebhooks($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        $sender                                = $object->sender;
        $sender                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        $installation                                      = $object->installation;
        $installation                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

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
