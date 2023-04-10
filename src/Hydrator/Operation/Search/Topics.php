<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Search;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Topics implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\Github\Schema\TopicSearchResultItem' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem($payload),
                'ApiClients\Client\Github\Schema\SearchResultTextMatches' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches($payload),
                'ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches⚡️Matches($payload),
                'ApiClients\Client\Github\Schema\TopicSearchResultItem\Related' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related($payload),
                'ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($payload),
                'ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases($payload),
                'ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases⚡️TopicRelation($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['incomplete_results'] ?? null;

            if ($value === null) {
                $missingFields[] = 'incomplete_results';
                goto after_incompleteResults;
            }

            $properties['incompleteResults'] = $value;

            after_incompleteResults:

            $value = $payload['items'] ?? null;

            if ($value === null) {
                $missingFields[] = 'items';
                goto after_items;
            }

            static $itemsCaster1;

            if ($itemsCaster1 === null) {
                $itemsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem',
));
            }

            $value = $itemsCaster1->cast($value, $this);

            $properties['items'] = $value;

            after_items:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem(array $payload): \ApiClients\Client\Github\Schema\TopicSearchResultItem
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $properties['displayName'] = null;
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['short_description'] ?? null;

            if ($value === null) {
                $properties['shortDescription'] = null;
                goto after_shortDescription;
            }

            $properties['shortDescription'] = $value;

            after_shortDescription:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['created_by'] ?? null;

            if ($value === null) {
                $properties['createdBy'] = null;
                goto after_createdBy;
            }

            $properties['createdBy'] = $value;

            after_createdBy:

            $value = $payload['released'] ?? null;

            if ($value === null) {
                $properties['released'] = null;
                goto after_released;
            }

            $properties['released'] = $value;

            after_released:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['featured'] ?? null;

            if ($value === null) {
                $missingFields[] = 'featured';
                goto after_featured;
            }

            $properties['featured'] = $value;

            after_featured:

            $value = $payload['curated'] ?? null;

            if ($value === null) {
                $missingFields[] = 'curated';
                goto after_curated;
            }

            $properties['curated'] = $value;

            after_curated:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $missingFields[] = 'score';
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $properties['repositoryCount'] = null;
                goto after_repositoryCount;
            }

            $properties['repositoryCount'] = $value;

            after_repositoryCount:

            $value = $payload['logo_url'] ?? null;

            if ($value === null) {
                $properties['logoUrl'] = null;
                goto after_logoUrl;
            }

            $properties['logoUrl'] = $value;

            after_logoUrl:

            $value = $payload['text_matches'] ?? null;

            if ($value === null) {
                $properties['textMatches'] = null;
                goto after_textMatches;
            }

            static $textMatchesCaster1;

            if ($textMatchesCaster1 === null) {
                $textMatchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SearchResultTextMatches',
));
            }

            $value = $textMatchesCaster1->cast($value, $this);

            $properties['textMatches'] = $value;

            after_textMatches:

            $value = $payload['related'] ?? null;

            if ($value === null) {
                $properties['related'] = null;
                goto after_related;
            }

            static $relatedCaster1;

            if ($relatedCaster1 === null) {
                $relatedCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem\\Related',
));
            }

            $value = $relatedCaster1->cast($value, $this);

            $properties['related'] = $value;

            after_related:

            $value = $payload['aliases'] ?? null;

            if ($value === null) {
                $properties['aliases'] = null;
                goto after_aliases;
            }

            static $aliasesCaster1;

            if ($aliasesCaster1 === null) {
                $aliasesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem\\Aliases',
));
            }

            $value = $aliasesCaster1->cast($value, $this);

            $properties['aliases'] = $value;

            after_aliases:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\TopicSearchResultItem::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\TopicSearchResultItem(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches(array $payload): \ApiClients\Client\Github\Schema\SearchResultTextMatches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['object_url'] ?? null;

            if ($value === null) {
                $properties['objectUrl'] = null;
                goto after_objectUrl;
            }

            $properties['objectUrl'] = $value;

            after_objectUrl:

            $value = $payload['object_type'] ?? null;

            if ($value === null) {
                $properties['objectType'] = null;
                goto after_objectType;
            }

            $properties['objectType'] = $value;

            after_objectType:

            $value = $payload['property'] ?? null;

            if ($value === null) {
                $properties['property'] = null;
                goto after_property;
            }

            $properties['property'] = $value;

            after_property:

            $value = $payload['fragment'] ?? null;

            if ($value === null) {
                $properties['fragment'] = null;
                goto after_fragment;
            }

            $properties['fragment'] = $value;

            after_fragment:

            $value = $payload['matches'] ?? null;

            if ($value === null) {
                $properties['matches'] = null;
                goto after_matches;
            }

            static $matchesCaster1;

            if ($matchesCaster1 === null) {
                $matchesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SearchResultTextMatches\\Matches',
));
            }

            $value = $matchesCaster1->cast($value, $this);

            $properties['matches'] = $value;

            after_matches:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SearchResultTextMatches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SearchResultTextMatches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SearchResultTextMatches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches⚡️Matches(array $payload): \ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

            $value = $payload['indices'] ?? null;

            if ($value === null) {
                $properties['indices'] = null;
                goto after_indices;
            }

            $properties['indices'] = $value;

            after_indices:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related(array $payload): \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['topic_relation'] ?? null;

            if ($value === null) {
                $properties['topicRelation'] = null;
                goto after_topicRelation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'topicRelation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['topicRelation'] = $value;

            after_topicRelation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Related', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\TopicSearchResultItem\Related::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Related', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation(array $payload): \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['topic_id'] ?? null;

            if ($value === null) {
                $properties['topicId'] = null;
                goto after_topicId;
            }

            $properties['topicId'] = $value;

            after_topicId:

            $value = $payload['relation_type'] ?? null;

            if ($value === null) {
                $properties['relationType'] = null;
                goto after_relationType;
            }

            $properties['relationType'] = $value;

            after_relationType:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases(array $payload): \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['topic_relation'] ?? null;

            if ($value === null) {
                $properties['topicRelation'] = null;
                goto after_topicRelation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'topicRelation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['topicRelation'] = $value;

            after_topicRelation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases⚡️TopicRelation(array $payload): \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['topic_id'] ?? null;

            if ($value === null) {
                $properties['topicId'] = null;
                goto after_topicId;
            }

            $properties['topicId'] = $value;

            after_topicId:

            $value = $payload['relation_type'] ?? null;

            if ($value === null) {
                $properties['relationType'] = null;
                goto after_relationType;
            }

            $properties['relationType'] = $value;

            after_relationType:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\Github\Schema\TopicSearchResultItem' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem($object),
            'ApiClients\Client\Github\Schema\SearchResultTextMatches' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches($object),
            'ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches⚡️Matches($object),
            'ApiClients\Client\Github\Schema\TopicSearchResultItem\Related' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related($object),
            'ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($object),
            'ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases($object),
            'ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases⚡️TopicRelation($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️Search⚡️Topics⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $incompleteResults = $object->incompleteResults;
        after_incompleteResults:        $result['incomplete_results'] = $incompleteResults;

        
        $items = $object->items;
        static $itemsSerializer0;

        if ($itemsSerializer0 === null) {
            $itemsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem',
));
        }
        
        $items = $itemsSerializer0->serialize($items, $this);
        after_items:        $result['items'] = $items;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\TopicSearchResultItem);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $displayName = $object->displayName;

        if ($displayName === null) {
            goto after_displayName;
        }
        after_displayName:        $result['display_name'] = $displayName;

        
        $shortDescription = $object->shortDescription;

        if ($shortDescription === null) {
            goto after_shortDescription;
        }
        after_shortDescription:        $result['short_description'] = $shortDescription;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $createdBy = $object->createdBy;

        if ($createdBy === null) {
            goto after_createdBy;
        }
        after_createdBy:        $result['created_by'] = $createdBy;

        
        $released = $object->released;

        if ($released === null) {
            goto after_released;
        }
        after_released:        $result['released'] = $released;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $featured = $object->featured;
        after_featured:        $result['featured'] = $featured;

        
        $curated = $object->curated;
        after_curated:        $result['curated'] = $curated;

        
        $score = $object->score;
        after_score:        $result['score'] = $score;

        
        $repositoryCount = $object->repositoryCount;

        if ($repositoryCount === null) {
            goto after_repositoryCount;
        }
        after_repositoryCount:        $result['repository_count'] = $repositoryCount;

        
        $logoUrl = $object->logoUrl;

        if ($logoUrl === null) {
            goto after_logoUrl;
        }
        after_logoUrl:        $result['logo_url'] = $logoUrl;

        
        $textMatches = $object->textMatches;

        if ($textMatches === null) {
            goto after_textMatches;
        }
        static $textMatchesSerializer0;

        if ($textMatchesSerializer0 === null) {
            $textMatchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SearchResultTextMatches',
));
        }
        
        $textMatches = $textMatchesSerializer0->serialize($textMatches, $this);
        after_textMatches:        $result['text_matches'] = $textMatches;

        
        $related = $object->related;

        if ($related === null) {
            goto after_related;
        }
        static $relatedSerializer0;

        if ($relatedSerializer0 === null) {
            $relatedSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem\\Related',
));
        }
        
        $related = $relatedSerializer0->serialize($related, $this);
        after_related:        $result['related'] = $related;

        
        $aliases = $object->aliases;

        if ($aliases === null) {
            goto after_aliases;
        }
        static $aliasesSerializer0;

        if ($aliasesSerializer0 === null) {
            $aliasesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\TopicSearchResultItem\\Aliases',
));
        }
        
        $aliases = $aliasesSerializer0->serialize($aliases, $this);
        after_aliases:        $result['aliases'] = $aliases;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SearchResultTextMatches);
        $result = [];

        $objectUrl = $object->objectUrl;

        if ($objectUrl === null) {
            goto after_objectUrl;
        }
        after_objectUrl:        $result['object_url'] = $objectUrl;

        
        $objectType = $object->objectType;

        if ($objectType === null) {
            goto after_objectType;
        }
        after_objectType:        $result['object_type'] = $objectType;

        
        $property = $object->property;

        if ($property === null) {
            goto after_property;
        }
        after_property:        $result['property'] = $property;

        
        $fragment = $object->fragment;

        if ($fragment === null) {
            goto after_fragment;
        }
        after_fragment:        $result['fragment'] = $fragment;

        
        $matches = $object->matches;

        if ($matches === null) {
            goto after_matches;
        }
        static $matchesSerializer0;

        if ($matchesSerializer0 === null) {
            $matchesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\SearchResultTextMatches\\Matches',
));
        }
        
        $matches = $matchesSerializer0->serialize($matches, $this);
        after_matches:        $result['matches'] = $matches;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SearchResultTextMatches⚡️Matches(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;

        
        $indices = $object->indices;

        if ($indices === null) {
            goto after_indices;
        }
        static $indicesSerializer0;

        if ($indicesSerializer0 === null) {
            $indicesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $indices = $indicesSerializer0->serialize($indices, $this);
        after_indices:        $result['indices'] = $indices;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related);
        $result = [];

        $topicRelation = $object->topicRelation;

        if ($topicRelation === null) {
            goto after_topicRelation;
        }
        $topicRelation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($topicRelation);
        after_topicRelation:        $result['topic_relation'] = $topicRelation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\TopicSearchResultItem\Related\TopicRelation);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $topicId = $object->topicId;

        if ($topicId === null) {
            goto after_topicId;
        }
        after_topicId:        $result['topic_id'] = $topicId;

        
        $relationType = $object->relationType;

        if ($relationType === null) {
            goto after_relationType;
        }
        after_relationType:        $result['relation_type'] = $relationType;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases);
        $result = [];

        $topicRelation = $object->topicRelation;

        if ($topicRelation === null) {
            goto after_topicRelation;
        }
        $topicRelation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Related⚡️TopicRelation($topicRelation);
        after_topicRelation:        $result['topic_relation'] = $topicRelation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️TopicSearchResultItem⚡️Aliases⚡️TopicRelation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\TopicSearchResultItem\Aliases\TopicRelation);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $topicId = $object->topicId;

        if ($topicId === null) {
            goto after_topicId;
        }
        after_topicId:        $result['topic_id'] = $topicId;

        
        $relationType = $object->relationType;

        if ($relationType === null) {
            goto after_relationType;
        }
        after_relationType:        $result['relation_type'] = $relationType;


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
