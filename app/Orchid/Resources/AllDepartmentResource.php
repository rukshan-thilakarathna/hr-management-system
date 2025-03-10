<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class AllDepartmentResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Departments::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Select::make('company_id')
                    ->options(\App\Models\Companies::all()->pluck('name', 'id'))
                    ->title('Company Name')
                    ->help('Please select company name')
                    ->required(),

                Input::make('name')
                    ->max(255)
                    ->title('Department Name')
                    ->placeholder('Enter Department Name')
                    ->help('Please enter Department name')
                    ->required(),


            ]),

            Group::make([
                Select::make('status')
                    ->title('Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->help('Select the company status'),

                TextArea::make('description')
                    ->title('Description')
                    ->required()
                    ->placeholder('Enter Company Description')
                    ->help('Please enter a brief description of the company')
                    ->rows(5),
            ]),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('company_id', 'Company Name')
                ->render(function ($model) {
                    return $model->company->name;
                }),

            TD::make('name', 'Department Name'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }


    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id', 'ID'),
            Sight::make('name', 'Name'),
            Sight::make('created_at', 'Date of creation'),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
