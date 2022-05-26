<?php

class __Mustache_e7066641d94356762b54f245da8442a6 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="form-item row">
';
        $buffer .= $indent . '    <div class="form-label col-12">
';
        $buffer .= $indent . '        <h1>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '</h1>
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="form-setting col-12">
';
        $buffer .= $indent . '        <div>';
        $value = $this->resolveValue($context->find('markdown'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
