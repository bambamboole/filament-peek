<?php

namespace Pboivin\FilamentPeek\Tests\Unit\Fixtures;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Pboivin\FilamentPeek\Pages\Concerns\HasBuilderPreview;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class EditRecordDummy extends EditRecord
{
    use HasPreviewModal;
    use HasBuilderPreview;

    protected static string $resource = ResourceDummy::class;

    public $data = ['blocks' => ['key' => 'value']];

    public function getRecord(): Model
    {
        return new ModelDummy();
    }
}