<?php

namespace Formfeed\SubfieldDependsOn;

use Laravel\Nova\Fields\FieldCollection;

interface Subfield
{
    
    public function hasSubfields(): bool;

    public function getSubfields(): FieldCollection;

    public function afterDependsOnSync() : self;

}
