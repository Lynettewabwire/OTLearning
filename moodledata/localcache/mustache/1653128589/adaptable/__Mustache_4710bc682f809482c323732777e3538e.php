<?php

class __Mustache_4710bc682f809482c323732777e3538e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-second-header" class="col-12 pt-3 pb-3 ';
        $value = $this->resolveValue($context->find('headerclasses'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="d-flex flex-fill flex-wrap align-items-center">
';
        $buffer .= $indent . '        <div id="page-navbar" class="mr-auto">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('navbar'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        // 'headeractions' section
        $value = $context->find('headeractions');
        $buffer .= $this->section75feff71e445dabbb40ec64ec19adbdc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section75feff71e445dabbb40ec64ec19adbdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
            <div class="header-action ml-2">{{{.}}}</div>
        </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
';
                $buffer .= $indent . '            <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
