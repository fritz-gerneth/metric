<?php declare(strict_types=1);

namespace ReactInspector;

use Rx\ObservableInterface;

interface CollectorInterface
{
    /**
     * Request a array of metrics.
     *
     * @return ObservableInterface<Metric[]>
     */
    public function collect(): ObservableInterface;

    /**
     * Cancel all outstanding operations.
     */
    public function cancel(): void;
}
