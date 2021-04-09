<?php


class Parameter
{
    private int $id;
    private float $parameter;
    private string $timestamp;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getParameter(): float
    {
        return $this->parameter;
    }

    /**
     * @param float $parameter
     */
    public function setParameter(float $parameter): void
    {
        $this->parameter = $parameter;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }


}