<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\Org\Rulesets;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RulesetId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\RepositoryRuleset' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryRuleset
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['target'] ?? null;

            if ($value === null) {
                $properties['target'] = null;
                goto after_target;
            }

            $properties['target'] = $value;

            after_target:

            $value = $payload['source_type'] ?? null;

            if ($value === null) {
                $properties['sourceType'] = null;
                goto after_sourceType;
            }

            $properties['sourceType'] = $value;

            after_sourceType:

            $value = $payload['source'] ?? null;

            if ($value === null) {
                $missingFields[] = 'source';
                goto after_source;
            }

            $properties['source'] = $value;

            after_source:

            $value = $payload['enforcement'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enforcement';
                goto after_enforcement;
            }

            $properties['enforcement'] = $value;

            after_enforcement:

            $value = $payload['bypass_actors'] ?? null;

            if ($value === null) {
                $properties['bypassActors'] = null;
                goto after_bypassActors;
            }

            $properties['bypassActors'] = $value;

            after_bypassActors:

            $value = $payload['current_user_can_bypass'] ?? null;

            if ($value === null) {
                $properties['currentUserCanBypass'] = null;
                goto after_currentUserCanBypass;
            }

            $properties['currentUserCanBypass'] = $value;

            after_currentUserCanBypass:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $properties['links'] = null;
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:

            $value = $payload['conditions'] ?? null;

            if ($value === null) {
                $properties['conditions'] = null;
                goto after_conditions;
            }

            static $conditionsCaster1;

            if ($conditionsCaster1 === null) {
                $conditionsCaster1 = new \ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\RepositoryRuleset\Conditions(...array (
));
            }

            $value = $conditionsCaster1->cast($value, $this);

            $properties['conditions'] = $value;

            after_conditions:

            $value = $payload['rules'] ?? null;

            if ($value === null) {
                $properties['rules'] = null;
                goto after_rules;
            }

            $properties['rules'] = $value;

            after_rules:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryRuleset::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryRuleset(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['self'] ?? null;

            if ($value === null) {
                $properties['self'] = null;
                goto after_self;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'self';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['self'] = $value;

            after_self:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $properties['html'] = null;
                goto after_html;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'html';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['html'] = $value;

            after_html:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $properties['href'] = null;
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $properties['href'] = null;
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHub\Schema\RepositoryRuleset' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset($object),
            'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links($object),
            'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_($object),
            'ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryRuleset);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $target = $object->target;

        if ($target === null) {
            goto after_target;
        }
        after_target:        $result['target'] = $target;

        
        $sourceType = $object->sourceType;

        if ($sourceType === null) {
            goto after_sourceType;
        }
        after_sourceType:        $result['source_type'] = $sourceType;

        
        $source = $object->source;
        after_source:        $result['source'] = $source;

        
        $enforcement = $object->enforcement;
        after_enforcement:        $result['enforcement'] = $enforcement;

        
        $bypassActors = $object->bypassActors;

        if ($bypassActors === null) {
            goto after_bypassActors;
        }
        static $bypassActorsSerializer0;

        if ($bypassActorsSerializer0 === null) {
            $bypassActorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bypassActors = $bypassActorsSerializer0->serialize($bypassActors, $this);
        after_bypassActors:        $result['bypass_actors'] = $bypassActors;

        
        $currentUserCanBypass = $object->currentUserCanBypass;

        if ($currentUserCanBypass === null) {
            goto after_currentUserCanBypass;
        }
        after_currentUserCanBypass:        $result['current_user_can_bypass'] = $currentUserCanBypass;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $links = $object->links;

        if ($links === null) {
            goto after_links;
        }
        $links = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links($links);
        after_links:        $result['_links'] = $links;

        
        $conditions = $object->conditions;

        if ($conditions === null) {
            goto after_conditions;
        }
            static $conditionsSerializer20;

            if ($conditionsSerializer20 === null) {
                $conditionsSerializer20 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
            }
            
            $conditions = $conditionsSerializer20->serialize($conditions, $this);
        if (is_object($conditions)) {
            $conditions = $this->serializeObject($conditions);
        }
        after_conditions:        $result['conditions'] = $conditions;

        
        $rules = $object->rules;

        if ($rules === null) {
            goto after_rules;
        }
        static $rulesSerializer0;

        if ($rulesSerializer0 === null) {
            $rulesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $rules = $rulesSerializer0->serialize($rules, $this);
        after_rules:        $result['rules'] = $rules;

        
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


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links);
        $result = [];

        $self = $object->self;

        if ($self === null) {
            goto after_self;
        }
        $self = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_($self);
        after_self:        $result['self'] = $self;

        
        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }
        $html = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html($html);
        after_html:        $result['html'] = $html;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Self_(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_);
        $result = [];

        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryRuleset⚡️Links⚡️Html(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html);
        $result = [];

        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


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
