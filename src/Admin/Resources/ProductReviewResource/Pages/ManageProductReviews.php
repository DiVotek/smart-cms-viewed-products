<?php

namespace SmartCms\Reviews\Admin\Resources\ProductReviewResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use SmartCms\Reviews\Admin\Resources\ProductReviewResource;

class ManageProductReviews extends ManageRecords
{
    protected static string $resource = ProductReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make(_actions('help'))
                ->iconButton()
                ->icon('heroicon-o-question-mark-circle')
                ->modalDescription(_hints('help.product_review'))
                ->modalFooterActions([]),
            Actions\CreateAction::make(),
        ];
    }
}
