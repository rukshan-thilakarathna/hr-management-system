<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Illuminate\Database\Eloquent\Model;

class Companies extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Companies::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

            Group::make([
                Input::make('name')
                    ->type('text')
                    ->max(255)
                    ->title('Company Name')
                    ->placeholder('Enter Company Name')
                    ->help('Please enter your company name')
                    ->required(),

                Input::make('email')
                    ->type('email')
                    ->title('Email Address')
                    ->placeholder('Enter Email Address')
                    ->help('Please enter a valid email address')
                    ->required(),
            ]),

            Group::make([
                Input::make('phone1')
                    ->type('text')
                    ->required()
                    ->title('Phone Number 01')
                    ->placeholder('Enter Phone Number 01')
                    ->help('Please enter the primary phone number')
                    ->mask('(999) 999-9999'),

                Input::make('phone2')
                    ->type('text')
                    ->required()
                    ->title('Phone Number 02')
                    ->placeholder('Enter Phone Number 02')
                    ->help('Please enter the secondary phone number')
                    ->mask('(999) 999-9999'),
            ]),


            Group::make([

                Input::make('fax')
                    ->type('text')
                    ->title('Fax Number')
                    ->placeholder('Enter Fax Number')
                    ->help('Please enter the fax number')
                    ->mask('(999) 999-9999'),

                Input::make('address')
                    ->type('text')
                    ->required()
                    ->title('Address')
                    ->placeholder('Enter Company Address')
                    ->help('Please enter the company address'),
            ]),


            Group::make([

                Input::make('city')
                    ->type('text')
                    ->required()
                    ->title('City')
                    ->placeholder('Enter City')
                    ->help('Please enter the city'),

                Input::make('state')
                    ->type('text')
                    ->required()
                    ->title('State')
                    ->placeholder('Enter State')
                    ->help('Please enter the state'),

            ]),


            Group::make([

                Input::make('country')
                    ->type('text')
                    ->title('Country')
                    ->value('Sri Lanka')
                    ->placeholder('Enter Country')
                    ->help('Please enter the country'),

                Input::make('website')
                    ->type('url')
                    ->title('Website')
                    ->placeholder('Enter Website URL')
                    ->help('Please enter the company website URL'),

            ]),

            Group::make([

                Input::make('tax_number')
                    ->type('text')
                    ->title('Tax Number')
                    ->placeholder('Enter Tax Number')
                    ->help('Please enter the company tax number'),

                Select::make('status')
                    ->title('Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->help('Select the company status'),
            ]),

            TextArea::make('description')
                ->title('Description')
                ->required()
                ->placeholder('Enter Company Description')
                ->help('Please enter a brief description of the company')
                ->rows(5),
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
            TD::make('id')->sort(),
            TD::make('name', 'Name')->sort(),
            TD::make('email', 'Email')->sort(),
            TD::make('phone1', 'Phone Number 01'),
            TD::make('city', 'City')->sort(),
            TD::make('status', 'Status')
                ->render(function ($model) {
                    return $model->status === 'active'
                        ? '<span style="color: green;">Active</span>'
                        : '<span style="color: red;">Inactive</span>';
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
            Sight::make('name', 'Company Name'),
            Sight::make('email', 'Company Email'),
            Sight::make('phone1', 'Phone Number 01'),
            Sight::make('phone2', 'Phone Number 02'),
            Sight::make('fax', 'Fax Number'),
            Sight::make('address', 'Address'),
            Sight::make('city', 'City'),
            Sight::make('state', 'State'),
            Sight::make('country', 'Country'),
            Sight::make('website', 'Website'),
            Sight::make('tax_number', 'Tax Number'),
            Sight::make('description', 'Description'),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [

        ];
    }

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(Model $model): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:companies,email,' . $model->id],
            'phone1' => ['nullable', 'string', 'regex:/^\(\d{3}\) \d{3}-\d{4}$/'],
            'phone2' => ['nullable', 'string', 'regex:/^\(\d{3}\) \d{3}-\d{4}$/'],
            'fax' => ['nullable', 'string', 'regex:/^\(\d{3}\) \d{3}-\d{4}$/'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'url'],
            'description' => ['nullable', 'string'],
            'tax_number' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:active,inactive'],
        ];
    }
}
