<?php

namespace PedroTeixeira\Bundle\GridBundle\Grid\Render;

/**
 * Render Url
 */
class Url extends RenderAbstract
{
    /**
     * @return string
     */
    public function render()
    {
        if ($this->getStringOnly()) {
            return $this->getValue();
        } else {
            return '<a href="' . $this->getValue() . '" target="_blank">' . $this->getValue() . '</a>';
        }
    }
}
