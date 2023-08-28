<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation;

use ApiClients\Client\GitHub\Schema\Feed;
use ApiClients\Client\GitHub\Schema\Feed\Links;
use ApiClients\Client\GitHub\Schema\LinkWithType;
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

class Feeds implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Feed' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed($payload),
                'ApiClients\Client\GitHub\Schema\Feed\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\LinkWithType' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed(array $payload): Feed
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timeline_url';
                goto after_timelineUrl;
            }

            $properties['timelineUrl'] = $value;

            after_timelineUrl:

            $value = $payload['user_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_url';
                goto after_userUrl;
            }

            $properties['userUrl'] = $value;

            after_userUrl:

            $value = $payload['current_user_public_url'] ?? null;

            if ($value === null) {
                $properties['currentUserPublicUrl'] = null;
                goto after_currentUserPublicUrl;
            }

            $properties['currentUserPublicUrl'] = $value;

            after_currentUserPublicUrl:

            $value = $payload['current_user_url'] ?? null;

            if ($value === null) {
                $properties['currentUserUrl'] = null;
                goto after_currentUserUrl;
            }

            $properties['currentUserUrl'] = $value;

            after_currentUserUrl:

            $value = $payload['current_user_actor_url'] ?? null;

            if ($value === null) {
                $properties['currentUserActorUrl'] = null;
                goto after_currentUserActorUrl;
            }

            $properties['currentUserActorUrl'] = $value;

            after_currentUserActorUrl:

            $value = $payload['current_user_organization_url'] ?? null;

            if ($value === null) {
                $properties['currentUserOrganizationUrl'] = null;
                goto after_currentUserOrganizationUrl;
            }

            $properties['currentUserOrganizationUrl'] = $value;

            after_currentUserOrganizationUrl:

            $value = $payload['current_user_organization_urls'] ?? null;

            if ($value === null) {
                $properties['currentUserOrganizationUrls'] = null;
                goto after_currentUserOrganizationUrls;
            }

            $properties['currentUserOrganizationUrls'] = $value;

            after_currentUserOrganizationUrls:

            $value = $payload['security_advisories_url'] ?? null;

            if ($value === null) {
                $properties['securityAdvisoriesUrl'] = null;
                goto after_securityAdvisoriesUrl;
            }

            $properties['securityAdvisoriesUrl'] = $value;

            after_securityAdvisoriesUrl:

            $value = $payload['repository_discussions_url'] ?? null;

            if ($value === null) {
                $properties['repositoryDiscussionsUrl'] = null;
                goto after_repositoryDiscussionsUrl;
            }

            $properties['repositoryDiscussionsUrl'] = $value;

            after_repositoryDiscussionsUrl:

            $value = $payload['repository_discussions_category_url'] ?? null;

            if ($value === null) {
                $properties['repositoryDiscussionsCategoryUrl'] = null;
                goto after_repositoryDiscussionsCategoryUrl;
            }

            $properties['repositoryDiscussionsCategoryUrl'] = $value;

            after_repositoryDiscussionsCategoryUrl:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Feed', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Feed::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Feed(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Feed', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links(array $payload): Links
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['timeline'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timeline';
                goto after_timeline;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'timeline';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['timeline'] = $value;

            after_timeline:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['security_advisories'] ?? null;

            if ($value === null) {
                $properties['securityAdvisories'] = null;
                goto after_securityAdvisories;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'securityAdvisories';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['securityAdvisories'] = $value;

            after_securityAdvisories:

            $value = $payload['current_user'] ?? null;

            if ($value === null) {
                $properties['currentUser'] = null;
                goto after_currentUser;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'currentUser';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['currentUser'] = $value;

            after_currentUser:

            $value = $payload['current_user_public'] ?? null;

            if ($value === null) {
                $properties['currentUserPublic'] = null;
                goto after_currentUserPublic;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'currentUserPublic';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['currentUserPublic'] = $value;

            after_currentUserPublic:

            $value = $payload['current_user_actor'] ?? null;

            if ($value === null) {
                $properties['currentUserActor'] = null;
                goto after_currentUserActor;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'currentUserActor';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['currentUserActor'] = $value;

            after_currentUserActor:

            $value = $payload['current_user_organization'] ?? null;

            if ($value === null) {
                $properties['currentUserOrganization'] = null;
                goto after_currentUserOrganization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'currentUserOrganization';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['currentUserOrganization'] = $value;

            after_currentUserOrganization:

            $value = $payload['current_user_organizations'] ?? null;

            if ($value === null) {
                $properties['currentUserOrganizations'] = null;
                goto after_currentUserOrganizations;
            }

            $properties['currentUserOrganizations'] = $value;

            after_currentUserOrganizations:

            $value = $payload['repository_discussions'] ?? null;

            if ($value === null) {
                $properties['repositoryDiscussions'] = null;
                goto after_repositoryDiscussions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repositoryDiscussions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repositoryDiscussions'] = $value;

            after_repositoryDiscussions:

            $value = $payload['repository_discussions_category'] ?? null;

            if ($value === null) {
                $properties['repositoryDiscussionsCategory'] = null;
                goto after_repositoryDiscussionsCategory;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repositoryDiscussionsCategory';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repositoryDiscussionsCategory'] = $value;

            after_repositoryDiscussionsCategory:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Links(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType(array $payload): LinkWithType
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(LinkWithType::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new LinkWithType(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Feed' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed($object),
                'ApiClients\Client\GitHub\Schema\Feed\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links($object),
                'ApiClients\Client\GitHub\Schema\LinkWithType' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed(mixed $object): mixed
    {
        assert($object instanceof Feed);
        $result = [];

        $timelineUrl                                      = $object->timelineUrl;
        after_timelineUrl:        $result['timeline_url'] = $timelineUrl;

        $userUrl                                  = $object->userUrl;
        after_userUrl:        $result['user_url'] = $userUrl;

        $currentUserPublicUrl = $object->currentUserPublicUrl;

        if ($currentUserPublicUrl === null) {
            goto after_currentUserPublicUrl;
        }

        after_currentUserPublicUrl:        $result['current_user_public_url'] = $currentUserPublicUrl;

        $currentUserUrl = $object->currentUserUrl;

        if ($currentUserUrl === null) {
            goto after_currentUserUrl;
        }

        after_currentUserUrl:        $result['current_user_url'] = $currentUserUrl;

        $currentUserActorUrl = $object->currentUserActorUrl;

        if ($currentUserActorUrl === null) {
            goto after_currentUserActorUrl;
        }

        after_currentUserActorUrl:        $result['current_user_actor_url'] = $currentUserActorUrl;

        $currentUserOrganizationUrl = $object->currentUserOrganizationUrl;

        if ($currentUserOrganizationUrl === null) {
            goto after_currentUserOrganizationUrl;
        }

        after_currentUserOrganizationUrl:        $result['current_user_organization_url'] = $currentUserOrganizationUrl;

        $currentUserOrganizationUrls = $object->currentUserOrganizationUrls;

        if ($currentUserOrganizationUrls === null) {
            goto after_currentUserOrganizationUrls;
        }

        static $currentUserOrganizationUrlsSerializer0;

        if ($currentUserOrganizationUrlsSerializer0 === null) {
            $currentUserOrganizationUrlsSerializer0 = new SerializeArrayItems(...[]);
        }

        $currentUserOrganizationUrls                                                        = $currentUserOrganizationUrlsSerializer0->serialize($currentUserOrganizationUrls, $this);
        after_currentUserOrganizationUrls:        $result['current_user_organization_urls'] = $currentUserOrganizationUrls;

        $securityAdvisoriesUrl = $object->securityAdvisoriesUrl;

        if ($securityAdvisoriesUrl === null) {
            goto after_securityAdvisoriesUrl;
        }

        after_securityAdvisoriesUrl:        $result['security_advisories_url'] = $securityAdvisoriesUrl;

        $repositoryDiscussionsUrl = $object->repositoryDiscussionsUrl;

        if ($repositoryDiscussionsUrl === null) {
            goto after_repositoryDiscussionsUrl;
        }

        after_repositoryDiscussionsUrl:        $result['repository_discussions_url'] = $repositoryDiscussionsUrl;

        $repositoryDiscussionsCategoryUrl = $object->repositoryDiscussionsCategoryUrl;

        if ($repositoryDiscussionsCategoryUrl === null) {
            goto after_repositoryDiscussionsCategoryUrl;
        }

        after_repositoryDiscussionsCategoryUrl:        $result['repository_discussions_category_url'] = $repositoryDiscussionsCategoryUrl;

        $links                                = $object->links;
        $links                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links($links);
        after_links:        $result['_links'] = $links;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Feed⚡️Links(mixed $object): mixed
    {
        assert($object instanceof Links);
        $result = [];

        $timeline                                  = $object->timeline;
        $timeline                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($timeline);
        after_timeline:        $result['timeline'] = $timeline;

        $user                              = $object->user;
        $user                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($user);
        after_user:        $result['user'] = $user;

        $securityAdvisories = $object->securityAdvisories;

        if ($securityAdvisories === null) {
            goto after_securityAdvisories;
        }

        $securityAdvisories                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($securityAdvisories);
        after_securityAdvisories:        $result['security_advisories'] = $securityAdvisories;

        $currentUser = $object->currentUser;

        if ($currentUser === null) {
            goto after_currentUser;
        }

        $currentUser                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($currentUser);
        after_currentUser:        $result['current_user'] = $currentUser;

        $currentUserPublic = $object->currentUserPublic;

        if ($currentUserPublic === null) {
            goto after_currentUserPublic;
        }

        $currentUserPublic                                             = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($currentUserPublic);
        after_currentUserPublic:        $result['current_user_public'] = $currentUserPublic;

        $currentUserActor = $object->currentUserActor;

        if ($currentUserActor === null) {
            goto after_currentUserActor;
        }

        $currentUserActor                                            = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($currentUserActor);
        after_currentUserActor:        $result['current_user_actor'] = $currentUserActor;

        $currentUserOrganization = $object->currentUserOrganization;

        if ($currentUserOrganization === null) {
            goto after_currentUserOrganization;
        }

        $currentUserOrganization                                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($currentUserOrganization);
        after_currentUserOrganization:        $result['current_user_organization'] = $currentUserOrganization;

        $currentUserOrganizations = $object->currentUserOrganizations;

        if ($currentUserOrganizations === null) {
            goto after_currentUserOrganizations;
        }

        static $currentUserOrganizationsSerializer0;

        if ($currentUserOrganizationsSerializer0 === null) {
            $currentUserOrganizationsSerializer0 = new SerializeArrayItems(...[]);
        }

        $currentUserOrganizations                                                    = $currentUserOrganizationsSerializer0->serialize($currentUserOrganizations, $this);
        after_currentUserOrganizations:        $result['current_user_organizations'] = $currentUserOrganizations;

        $repositoryDiscussions = $object->repositoryDiscussions;

        if ($repositoryDiscussions === null) {
            goto after_repositoryDiscussions;
        }

        $repositoryDiscussions                                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($repositoryDiscussions);
        after_repositoryDiscussions:        $result['repository_discussions'] = $repositoryDiscussions;

        $repositoryDiscussionsCategory = $object->repositoryDiscussionsCategory;

        if ($repositoryDiscussionsCategory === null) {
            goto after_repositoryDiscussionsCategory;
        }

        $repositoryDiscussionsCategory                                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType($repositoryDiscussionsCategory);
        after_repositoryDiscussionsCategory:        $result['repository_discussions_category'] = $repositoryDiscussionsCategory;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LinkWithType(mixed $object): mixed
    {
        assert($object instanceof LinkWithType);
        $result = [];

        $href                              = $object->href;
        after_href:        $result['href'] = $href;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

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
