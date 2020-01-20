<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Halimtuhu\ArrayImages\ArrayImages;
use Timothyasp\Color\Color;
class Certificate extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Certificate';
    public static function singleRecord(): bool
    {
        return true;
    }
    public static function label()
    {
        return 'Сертифікати';
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
            Trix::make(('Верхний текст'),'text_first'),
            ArrayImages::make('Картинки первого слайдера','images_first')->disk('public'),
            Trix::make(('Текст посередине'),'text_second'),
            ArrayImages::make('Картинки второго слайдера','images_second')->disk('public'),
            Trix::make(('Предпоследний текст'),'text_third'),
            ArrayImages::make('Картинки третьего слайдера','images_third')->disk('public'),
            Color::make(('Цвет важного текста'),"color_text"),
            Text::make(('Важный текст'),'text_fourth'),
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
