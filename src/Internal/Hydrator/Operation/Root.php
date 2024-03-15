<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation;

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

use function assert;
use function count;
use function is_a;

class Root implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Root' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Root($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Root(array $payload): \ApiClients\Client\GitHub\Schema\Root
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['current_user_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'current_user_url';
                goto after_currentUserUrl;
            }

            $properties['currentUserUrl'] = $value;

            after_currentUserUrl:

            $value = $payload['current_user_authorizations_html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'current_user_authorizations_html_url';
                goto after_currentUserAuthorizationsHtmlUrl;
            }

            $properties['currentUserAuthorizationsHtmlUrl'] = $value;

            after_currentUserAuthorizationsHtmlUrl:

            $value = $payload['authorizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'authorizations_url';
                goto after_authorizationsUrl;
            }

            $properties['authorizationsUrl'] = $value;

            after_authorizationsUrl:

            $value = $payload['code_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code_search_url';
                goto after_codeSearchUrl;
            }

            $properties['codeSearchUrl'] = $value;

            after_codeSearchUrl:

            $value = $payload['commit_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_search_url';
                goto after_commitSearchUrl;
            }

            $properties['commitSearchUrl'] = $value;

            after_commitSearchUrl:

            $value = $payload['emails_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'emails_url';
                goto after_emailsUrl;
            }

            $properties['emailsUrl'] = $value;

            after_emailsUrl:

            $value = $payload['emojis_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'emojis_url';
                goto after_emojisUrl;
            }

            $properties['emojisUrl'] = $value;

            after_emojisUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['feeds_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'feeds_url';
                goto after_feedsUrl;
            }

            $properties['feedsUrl'] = $value;

            after_feedsUrl:

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

            $value = $payload['hub_url'] ?? null;

            if ($value === null) {
                $properties['hubUrl'] = null;
                goto after_hubUrl;
            }

            $properties['hubUrl'] = $value;

            after_hubUrl:

            $value = $payload['issue_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_search_url';
                goto after_issueSearchUrl;
            }

            $properties['issueSearchUrl'] = $value;

            after_issueSearchUrl:

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

            $value = $payload['label_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'label_search_url';
                goto after_labelSearchUrl;
            }

            $properties['labelSearchUrl'] = $value;

            after_labelSearchUrl:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notificationsUrl;
            }

            $properties['notificationsUrl'] = $value;

            after_notificationsUrl:

            $value = $payload['organization_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization_url';
                goto after_organizationUrl;
            }

            $properties['organizationUrl'] = $value;

            after_organizationUrl:

            $value = $payload['organization_repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization_repositories_url';
                goto after_organizationRepositoriesUrl;
            }

            $properties['organizationRepositoriesUrl'] = $value;

            after_organizationRepositoriesUrl:

            $value = $payload['organization_teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization_teams_url';
                goto after_organizationTeamsUrl;
            }

            $properties['organizationTeamsUrl'] = $value;

            after_organizationTeamsUrl:

            $value = $payload['public_gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_gists_url';
                goto after_publicGistsUrl;
            }

            $properties['publicGistsUrl'] = $value;

            after_publicGistsUrl:

            $value = $payload['rate_limit_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rate_limit_url';
                goto after_rateLimitUrl;
            }

            $properties['rateLimitUrl'] = $value;

            after_rateLimitUrl:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['repository_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_search_url';
                goto after_repositorySearchUrl;
            }

            $properties['repositorySearchUrl'] = $value;

            after_repositorySearchUrl:

            $value = $payload['current_user_repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'current_user_repositories_url';
                goto after_currentUserRepositoriesUrl;
            }

            $properties['currentUserRepositoriesUrl'] = $value;

            after_currentUserRepositoriesUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['starred_gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_gists_url';
                goto after_starredGistsUrl;
            }

            $properties['starredGistsUrl'] = $value;

            after_starredGistsUrl:

            $value = $payload['topic_search_url'] ?? null;

            if ($value === null) {
                $properties['topicSearchUrl'] = null;
                goto after_topicSearchUrl;
            }

            $properties['topicSearchUrl'] = $value;

            after_topicSearchUrl:

            $value = $payload['user_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_url';
                goto after_userUrl;
            }

            $properties['userUrl'] = $value;

            after_userUrl:

            $value = $payload['user_organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_organizations_url';
                goto after_userOrganizationsUrl;
            }

            $properties['userOrganizationsUrl'] = $value;

            after_userOrganizationsUrl:

            $value = $payload['user_repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_repositories_url';
                goto after_userRepositoriesUrl;
            }

            $properties['userRepositoriesUrl'] = $value;

            after_userRepositoriesUrl:

            $value = $payload['user_search_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_search_url';
                goto after_userSearchUrl;
            }

            $properties['userSearchUrl'] = $value;

            after_userSearchUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Root', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Root::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Root(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Root', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Root' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Root($object),
                default => throw new LogicException('No serialization defined for $className'),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Root(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\Root);
        $result = [];

        $currentUserUrl                                          = $object->currentUserUrl;
        after_currentUserUrl:        $result['current_user_url'] = $currentUserUrl;

        $currentUserAuthorizationsHtmlUrl                                                              = $object->currentUserAuthorizationsHtmlUrl;
        after_currentUserAuthorizationsHtmlUrl:        $result['current_user_authorizations_html_url'] = $currentUserAuthorizationsHtmlUrl;

        $authorizationsUrl                                            = $object->authorizationsUrl;
        after_authorizationsUrl:        $result['authorizations_url'] = $authorizationsUrl;

        $codeSearchUrl                                         = $object->codeSearchUrl;
        after_codeSearchUrl:        $result['code_search_url'] = $codeSearchUrl;

        $commitSearchUrl                                           = $object->commitSearchUrl;
        after_commitSearchUrl:        $result['commit_search_url'] = $commitSearchUrl;

        $emailsUrl                                    = $object->emailsUrl;
        after_emailsUrl:        $result['emails_url'] = $emailsUrl;

        $emojisUrl                                    = $object->emojisUrl;
        after_emojisUrl:        $result['emojis_url'] = $emojisUrl;

        $eventsUrl                                    = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        $feedsUrl                                   = $object->feedsUrl;
        after_feedsUrl:        $result['feeds_url'] = $feedsUrl;

        $followersUrl                                       = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        $followingUrl                                       = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        $gistsUrl                                   = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        $hubUrl = $object->hubUrl;

        if ($hubUrl === null) {
            goto after_hubUrl;
        }

        after_hubUrl:        $result['hub_url'] = $hubUrl;

        $issueSearchUrl                                          = $object->issueSearchUrl;
        after_issueSearchUrl:        $result['issue_search_url'] = $issueSearchUrl;

        $issuesUrl                                    = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        $keysUrl                                  = $object->keysUrl;
        after_keysUrl:        $result['keys_url'] = $keysUrl;

        $labelSearchUrl                                          = $object->labelSearchUrl;
        after_labelSearchUrl:        $result['label_search_url'] = $labelSearchUrl;

        $notificationsUrl                                           = $object->notificationsUrl;
        after_notificationsUrl:        $result['notifications_url'] = $notificationsUrl;

        $organizationUrl                                          = $object->organizationUrl;
        after_organizationUrl:        $result['organization_url'] = $organizationUrl;

        $organizationRepositoriesUrl                                                       = $object->organizationRepositoriesUrl;
        after_organizationRepositoriesUrl:        $result['organization_repositories_url'] = $organizationRepositoriesUrl;

        $organizationTeamsUrl                                                = $object->organizationTeamsUrl;
        after_organizationTeamsUrl:        $result['organization_teams_url'] = $organizationTeamsUrl;

        $publicGistsUrl                                          = $object->publicGistsUrl;
        after_publicGistsUrl:        $result['public_gists_url'] = $publicGistsUrl;

        $rateLimitUrl                                        = $object->rateLimitUrl;
        after_rateLimitUrl:        $result['rate_limit_url'] = $rateLimitUrl;

        $repositoryUrl                                        = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        $repositorySearchUrl                                               = $object->repositorySearchUrl;
        after_repositorySearchUrl:        $result['repository_search_url'] = $repositorySearchUrl;

        $currentUserRepositoriesUrl                                                       = $object->currentUserRepositoriesUrl;
        after_currentUserRepositoriesUrl:        $result['current_user_repositories_url'] = $currentUserRepositoriesUrl;

        $starredUrl                                     = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        $starredGistsUrl                                           = $object->starredGistsUrl;
        after_starredGistsUrl:        $result['starred_gists_url'] = $starredGistsUrl;

        $topicSearchUrl = $object->topicSearchUrl;

        if ($topicSearchUrl === null) {
            goto after_topicSearchUrl;
        }

        after_topicSearchUrl:        $result['topic_search_url'] = $topicSearchUrl;

        $userUrl                                  = $object->userUrl;
        after_userUrl:        $result['user_url'] = $userUrl;

        $userOrganizationsUrl                                                = $object->userOrganizationsUrl;
        after_userOrganizationsUrl:        $result['user_organizations_url'] = $userOrganizationsUrl;

        $userRepositoriesUrl                                               = $object->userRepositoriesUrl;
        after_userRepositoriesUrl:        $result['user_repositories_url'] = $userRepositoriesUrl;

        $userSearchUrl                                         = $object->userSearchUrl;
        after_userSearchUrl:        $result['user_search_url'] = $userSearchUrl;

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
