<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Plans implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\Github\Schema\MarketplaceListingPlan
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['accounts_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'accounts_url';
                    goto after_accounts_url;
                }

                $properties['accounts_url'] = $value;
    
                after_accounts_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'number';
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['monthly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'monthly_price_in_cents';
                    goto after_monthly_price_in_cents;
                }

                $properties['monthly_price_in_cents'] = $value;
    
                after_monthly_price_in_cents:

                $value = $payload['yearly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'yearly_price_in_cents';
                    goto after_yearly_price_in_cents;
                }

                $properties['yearly_price_in_cents'] = $value;
    
                after_yearly_price_in_cents:

                $value = $payload['price_model'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'price_model';
                    goto after_price_model;
                }

                $properties['price_model'] = $value;
    
                after_price_model:

                $value = $payload['has_free_trial'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_free_trial';
                    goto after_has_free_trial;
                }

                $properties['has_free_trial'] = $value;
    
                after_has_free_trial:

                $value = $payload['unit_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unit_name';
                    goto after_unit_name;
                }

                $properties['unit_name'] = $value;
    
                after_unit_name:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'state';
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['bullets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'bullets';
                    goto after_bullets;
                }

                $properties['bullets'] = $value;
    
                after_bullets:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\MarketplaceListingPlan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplaceListingPlan);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $accounts_url = $object->accounts_url;

        if ($accounts_url === null) {
            goto after_accounts_url;
        }
        after_accounts_url:        $result['accounts_url'] = $accounts_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $monthly_price_in_cents = $object->monthly_price_in_cents;

        if ($monthly_price_in_cents === null) {
            goto after_monthly_price_in_cents;
        }
        after_monthly_price_in_cents:        $result['monthly_price_in_cents'] = $monthly_price_in_cents;

        
        $yearly_price_in_cents = $object->yearly_price_in_cents;

        if ($yearly_price_in_cents === null) {
            goto after_yearly_price_in_cents;
        }
        after_yearly_price_in_cents:        $result['yearly_price_in_cents'] = $yearly_price_in_cents;

        
        $price_model = $object->price_model;

        if ($price_model === null) {
            goto after_price_model;
        }
        after_price_model:        $result['price_model'] = $price_model;

        
        $has_free_trial = $object->has_free_trial;

        if ($has_free_trial === null) {
            goto after_has_free_trial;
        }
        after_has_free_trial:        $result['has_free_trial'] = $has_free_trial;

        
        $unit_name = $object->unit_name;

        if ($unit_name === null) {
            goto after_unit_name;
        }
        after_unit_name:        $result['unit_name'] = $unit_name;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $bullets = $object->bullets;

        if ($bullets === null) {
            goto after_bullets;
        }
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bullets = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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
