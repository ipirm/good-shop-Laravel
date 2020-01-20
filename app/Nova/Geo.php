<?php

namespace App\Nova;

use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Geo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Geo';
    public static function label()
    {
        return 'Геодезія';
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            ID::make()->sortable(),
            TextWithSlug::make(('Заголовок'),'title')
                ->slug('title_slug'),
            Text::make(('Підзаголовок'),'subtitle'),
            Text::make(('Час'),'view'),
            Text::make(('Область'),'area'),
            Text::make(('Документ'),'file'),
            Number::make(('Цiна'),'price'),
            Text::make(('Назва модального вiкна'),'document_title')->hideFromIndex(),
            Trix::make(('Змiст модального вiкна'),'document_body')->hideFromIndex(),
            Text::make(('Номер'),'document_number')->hideFromIndex(),
            Text::make(('Email'),'document_mail')->hideFromIndex(),
            Text::make(('Назва модального вiкна цiни'),'price_header')->hideFromIndex(),
            Text::make(('Заголовок модального вiкна цiни'),'price_title')->hideFromIndex(),
            Trix::make(('Змiст модального вiкна цiни'),'price_text')->hideFromIndex(),
            Boolean::make('Active'),
            Slug::make(('Ссылка'),'title_slug')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
