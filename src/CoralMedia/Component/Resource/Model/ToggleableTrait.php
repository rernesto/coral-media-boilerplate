<?php

declare(strict_types=1);

namespace CoralMedia\Component\Resource\Model;

trait ToggleableTrait
{
    /** @var bool */
    protected $enabled = true;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = (bool) $enabled;
    }

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }
}