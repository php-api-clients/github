<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Feeds implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\Feed' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed($payload),
                'ApiClients\Client\Github\Schema\Feed\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed⚡️Links($payload),
                'ApiClients\Client\Github\Schema\LinkWithType' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed(array $payload): \ApiClients\Client\Github\Schema\Feed
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['timeline_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'timeline_url';
                    goto after_timeline_url;
                }

                $properties['timeline_url'] = $value;
    
                after_timeline_url:

                $value = $payload['user_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_url';
                    goto after_user_url;
                }

                $properties['user_url'] = $value;
    
                after_user_url:

                $value = $payload['current_user_public_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_public_url';
                    goto after_current_user_public_url;
                }

                $properties['current_user_public_url'] = $value;
    
                after_current_user_public_url:

                $value = $payload['current_user_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_url';
                    goto after_current_user_url;
                }

                $properties['current_user_url'] = $value;
    
                after_current_user_url:

                $value = $payload['current_user_actor_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_actor_url';
                    goto after_current_user_actor_url;
                }

                $properties['current_user_actor_url'] = $value;
    
                after_current_user_actor_url:

                $value = $payload['current_user_organization_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_organization_url';
                    goto after_current_user_organization_url;
                }

                $properties['current_user_organization_url'] = $value;
    
                after_current_user_organization_url:

                $value = $payload['current_user_organization_urls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_organization_urls';
                    goto after_current_user_organization_urls;
                }

                $properties['current_user_organization_urls'] = $value;
    
                after_current_user_organization_urls:

                $value = $payload['security_advisories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_advisories_url';
                    goto after_security_advisories_url;
                }

                $properties['security_advisories_url'] = $value;
    
                after_security_advisories_url:

                $value = $payload['repository_discussions_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_discussions_url';
                    goto after_repository_discussions_url;
                }

                $properties['repository_discussions_url'] = $value;
    
                after_repository_discussions_url:

                $value = $payload['repository_discussions_category_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_discussions_category_url';
                    goto after_repository_discussions_category_url;
                }

                $properties['repository_discussions_category_url'] = $value;
    
                after_repository_discussions_category_url:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '_links';
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Feed', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Feed::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Feed(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Feed', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed⚡️Links(array $payload): \ApiClients\Client\Github\Schema\Feed\Links
        {
            $properties = []; 
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['security_advisories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_advisories';
                    goto after_security_advisories;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'security_advisories';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['security_advisories'] = $value;
    
                after_security_advisories:

                $value = $payload['current_user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user';
                    goto after_current_user;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'current_user';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['current_user'] = $value;
    
                after_current_user:

                $value = $payload['current_user_public'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_public';
                    goto after_current_user_public;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'current_user_public';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['current_user_public'] = $value;
    
                after_current_user_public:

                $value = $payload['current_user_actor'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_actor';
                    goto after_current_user_actor;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'current_user_actor';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['current_user_actor'] = $value;
    
                after_current_user_actor:

                $value = $payload['current_user_organization'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_organization';
                    goto after_current_user_organization;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'current_user_organization';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['current_user_organization'] = $value;
    
                after_current_user_organization:

                $value = $payload['current_user_organizations'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'current_user_organizations';
                    goto after_current_user_organizations;
                }

                $properties['current_user_organizations'] = $value;
    
                after_current_user_organizations:

                $value = $payload['repository_discussions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_discussions';
                    goto after_repository_discussions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repository_discussions';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repository_discussions'] = $value;
    
                after_repository_discussions:

                $value = $payload['repository_discussions_category'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_discussions_category';
                    goto after_repository_discussions_category;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repository_discussions_category';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repository_discussions_category'] = $value;
    
                after_repository_discussions_category:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Feed\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Feed\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LinkWithType(array $payload): \ApiClients\Client\Github\Schema\LinkWithType
        {
            $properties = []; 
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\LinkWithType::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\LinkWithType(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\Schema\Feed' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Feed);
        $result = [];
        
        $timeline_url = $object->timeline_url;

        if ($timeline_url === null) {
            goto after_timeline_url;
        }
        after_timeline_url:        $result['timeline_url'] = $timeline_url;

        
        $user_url = $object->user_url;

        if ($user_url === null) {
            goto after_user_url;
        }
        after_user_url:        $result['user_url'] = $user_url;

        
        $current_user_public_url = $object->current_user_public_url;
        after_current_user_public_url:        $result['current_user_public_url'] = $current_user_public_url;

        
        $current_user_url = $object->current_user_url;
        after_current_user_url:        $result['current_user_url'] = $current_user_url;

        
        $current_user_actor_url = $object->current_user_actor_url;
        after_current_user_actor_url:        $result['current_user_actor_url'] = $current_user_actor_url;

        
        $current_user_organization_url = $object->current_user_organization_url;
        after_current_user_organization_url:        $result['current_user_organization_url'] = $current_user_organization_url;

        
        $current_user_organization_urls = $object->current_user_organization_urls;
        static $current_user_organization_urlsSerializer0;

        if ($current_user_organization_urlsSerializer0 === null) {
            $current_user_organization_urlsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $current_user_organization_urls = $current_user_organization_urlsSerializer0->serialize($current_user_organization_urls, $this);
        after_current_user_organization_urls:        $result['current_user_organization_urls'] = $current_user_organization_urls;

        
        $security_advisories_url = $object->security_advisories_url;
        after_security_advisories_url:        $result['security_advisories_url'] = $security_advisories_url;

        
        $repository_discussions_url = $object->repository_discussions_url;
        after_repository_discussions_url:        $result['repository_discussions_url'] = $repository_discussions_url;

        
        $repository_discussions_category_url = $object->repository_discussions_category_url;
        after_repository_discussions_category_url:        $result['repository_discussions_category_url'] = $repository_discussions_category_url;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Feed⚡️Links($_links);
        after__links:        $result['_links'] = $_links;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
