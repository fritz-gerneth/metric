<?php declare(strict_types=1);

namespace ReactInspector;

final class Metric
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var float
     */
    private $value;

    /**
     * @var float
     */
    private $time;

    /**
     * @param string $key
     * @param float  $value
     * @param float  $time
     */
    public function __construct(string $key, float $value, float $time = null)
    {
        $this->key = $key;
        $this->value = $value;
        $this->time = $time ?? \microtime(true);
    }

    public function __toString(): string
    {
        return $this->key . ' ' . (string)$this->value . ' ' . (string)$this->time;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return float
     */
    public function getTime(): float
    {
        return $this->time;
    }
}
