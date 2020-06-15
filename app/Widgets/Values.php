<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Values extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $values = value::all()->get();

        return view('widgets.values', [
            'config' => $this->config,
            'values' => $values
        ]);
    }
}
